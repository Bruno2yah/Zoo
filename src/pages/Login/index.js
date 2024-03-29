import styles from './styles';
import { View,Text,Pressable,TextInput,Image, ImageBackground, ActivityIndicator} from 'react-native';
import { useState } from 'react';
import { useNavigation } from '@react-navigation/native';
import { carregar } from './axios';
import { getEmailStorage,getSenhaStorage } from './asyncStorage';

const fundo = require('../../../assets/img/Fundo.png')
const logo = require('../../../assets/img/Logo.png')

export default function App(){
    const navigation = useNavigation();
    const [load,setLoad] = useState(true);
    const [emailConfi, setEmailConfi] = useState();
    const [senhaConfi, setSenhaConfi] = useState();
    const [email, setEmail] = useState();
    const [senha, setSenha] = useState();
    const [dados,setDados] = useState();
    const [id,setId] = useState();

    const carregarStorage = async() =>{
        const [email, senha] = await Promise.all([getEmailStorage(), getSenhaStorage()]);
        setEmail(dados.email);
        setSenha(dados.senha);
    };
    const carregarApi = async() =>{
        const response = await carregar(emailConfi,senhaConfi);
        setDados(response);
        setId(response.id)

        if(id){
           return navigation.navigate('UserInformation',{idUser: id});
        }        
    }
    const carregarDados = async() => {
        await carregarApi();
        if(dados){
            await carregarStorage();
        }
    }
    useState(() => {
        setTimeout(() => {
            
            setLoad(false)
        },1000)
    });
    if(load){
        return (<ActivityIndicator style={styles.load}
            animating={load}
            color={'blue'}
            size={'large'}
            />)
    }
    return (
        <ImageBackground source = {fundo} style={styles.imageBackground} resizeMode='cover'>
            <Image source={logo}/>
            <View style={styles.boxInput}>
                <TextInput
                style={styles.input}
                onChangeText={emailConfi => setEmailConfi(emailConfi)}
                placeholder='email'
                />
                <TextInput 
                style={styles.input}
                secureTextEntry={true}
                onChangeText={senhaConfi => setSenhaConfi(senhaConfi)}
                placeholder='senha'
                /> 
            </View>
            <View style={styles.boxSenha}>
                <Text style={styles.textSenha} onPress={() => navigation.navigate('register')}>Esqueceu sua senha ?</Text>
            </View>
            <View style={styles.boxButton}>
                <Pressable style={styles.button} onPress={carregarDados}>
                    <Text style={styles.textButton}>Logar</Text>
                </Pressable>
            </View>
        </ImageBackground>
    )

}
