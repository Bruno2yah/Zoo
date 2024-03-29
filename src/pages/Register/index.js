import styles from './styles';
import { View,Text,Pressable,TextInput,Image, ImageBackground, ActivityIndicator} from 'react-native';
import { useState } from 'react';
import { useNavigation } from '@react-navigation/native';
import { carregar } from './axios';
import {setTelefoneStorage,setEmailStorage,setSenhaStorage,setNomeStorage} from './asyncStorage';

const fundo = require('../../../assets/img/Fundo.png')
const logo = require('../../../assets/img/Logo.png')

export default function App(){
    
        const navigation = useNavigation();
        const [load,setLoad] = useState(false);
        const [nome, setNome] = useState();
        const [email, setEmail] = useState();
        const [telefone, setTelefone] = useState();
        const [senha, setSenha] = useState();

    const carregarStorage = async()=>{
         setNomeStorage(nome);
         setSenhaStorage(senha);
         setEmailStorage(email);
         setTelefoneStorage(telefone);
    }
    const chamadorFuncao = async() => {
        await carregar(nome,email,senha,telefone);
        await carregarStorage();
       if(nome && email && telefone && senha != undefined){
        navigation.navigate('home');
       }
    }

    useState(() => {
        setTimeout(() => {
            setLoad(false)
        },1000)
       
    })
    
    if(load){
        return (<ActivityIndicator style={styles.load}
            animating={load}
            color={'blue'}
            size={'large'}
            />)
    }
    return (
        <ImageBackground source = {fundo} style={styles.imageBackground}>
            <Image source={logo} style = {styles.logo}/>
            <View style={styles.boxInput}>
                <TextInput
                style={styles.input}
                placeholder='nome'
                onChangeText={(nome) => {setNome(nome)}}
                />
                     <TextInput 
                style={styles.input}
                placeholder='email'
                onChangeText={(email) => {setEmail(email)}}
                />
            <TextInput
            style={styles.input}
           placeholder='telefone'
           onChangeText={(telefone) => {setTelefone(telefone)}}
            />
            <TextInput 
                style={styles.input}
                placeholder='senha'
                secureTextEntry={true}
                onChangeText={(senha) => {setSenha(senha)}}
                />        
            </View>
            <View style={styles.boxButton}>
                <Pressable style={styles.button} onPress={chamadorFuncao} >
                    <Text style={styles.textButton}>Enviar</Text>
                </Pressable>
            </View>   
        </ImageBackground> 
    )
}
