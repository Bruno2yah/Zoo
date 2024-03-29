
import styles from './styles';
import { View,Text, Image, ImageBackground, TextInput, Pressable, ActivityIndicator} from 'react-native';
import { useState} from 'react';
import { useRoute } from '@react-navigation/native';
import { getNameStorage,getEmailStorage,getTelefoneStorage,getSenhaStorage } from './asyncStorage';
import { carregar } from './axios';
const fundo = require('../../../assets/img/Fundo.png')
const logo = require('../../../assets/img/Logo.png')
export default function App({navigation}){
const route = useRoute();
const id = route.params?.idUser;
const [userInfo,setUserInfo] = useState({});
const [load,setLoad] = useState(true); 
const [nome, setNome] = useState('');
const [email, setEmail] = useState('');
const [telefone, setTelefone] = useState('');
const [senha, setSenha] = useState('');
const [edit, setEdit] = useState(false);  
const [input, setInput] = useState({backgroundColor: '#D9D9D9'});

const carregarDados = async() =>
    {  
    const nomeS = await getNameStorage();
    const emailS = await getEmailStorage();
    const telefoneS = await getTelefoneStorage();
    const senhaS = await getSenhaStorage();
     setNome(nomeS)
     setEmail(emailS)
     setTelefone(telefoneS)
     setSenha(senhaS)
  }
const carregarDadosApi = async()=>
  {
    const userInfo = await carregar(id);
    setUserInfo(userInfo);
    console.log(userInfo.nome)
  }
      useState(() => {
         carregarDadosApi();
           carregarDados();
         
        setLoad(false)
      });  
if(load){
    return (<ActivityIndicator style={styles.load}
            animating={load}
            color={'blue'}
            size={'large'}
            />)
}

function editar(){
  if(edit == true){
    setEdit(false);
    setInput({backgroundColor: '#D9D9D9'})
    console.log(edit);
  } else{
    setEdit(true);
    setInput({backgroundColor: '#F7FFFF'});
    console.log(edit);
  }
}

function teste(){
  console.log('Funcionando')
}
return (
      <ImageBackground source = {fundo} style={styles.imageBackground}>
        <Image source={logo} style = {styles.logo}/>
        <View style={styles.boxInput}>
          <View style={styles.boxButtonEditar}>
            <Pressable style={styles.buttonEditar} onPress={editar}>
                
            </Pressable>
          </View>
          <TextInput
            style={[styles.input, input]}
            placeholder='nome'
            readOnly = {!edit}
            value={nome}
            onChangeText={(nome) => {setNome(nome)}}
          />
          <TextInput 
            style={[styles.input, input]}
            placeholder='email'
            readOnly = {!edit}
            value={email}
            onChangeText={(email) => {setEmail(email)}}
          />
          <TextInput
            style={[styles.input, input]}
            placeholder='telefone'
            readOnly = {!edit}
            value={telefone}
            onChangeText={(telefone) => {setTelefone(telefone)}}
          />
          <TextInput 
            style={[styles.input, input]}
            placeholder='senha'
            secureTextEntry={true}
            readOnly = {!edit}
            value={senha}
            onChangeText={(senha) => {setSenha(senha)}}
          />        
        </View>
        <View style={styles.boxButton}>
            <Pressable style={styles.button} onPress={teste} disabled={!edit}>
                <Text style={styles.textButton}>Salvar</Text>
            </Pressable>
        </View>   
      </ImageBackground> 
    )
}
