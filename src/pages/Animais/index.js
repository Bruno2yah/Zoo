import React, { useEffect, useState } from 'react';
import { View, Text, FlatList, ImageBackground, Image, Pressable} from 'react-native';
import LoadView from '../../components/loadView';
import { carregarAnimais } from './axios';
import styles from '../Animais/styles';
import fundo from '../../../assets/img/Fundo.png';


export default function App({route}) {
  const [animais, setAnimais] = useState([]);
  const [load, setLoad] = useState(true);
  const { territorioId } = route.params;
  console.log(territorioId)
  useEffect(() => {
    const dadosAnimais = async () => {
      const response = await carregarAnimais(territorioId);
      
      console.log(response);
      setAnimais(response);
      setLoad(false);
      
    };
    dadosAnimais();

  }, []);

  if (load) {
    return <LoadView />;
  }
  const trazedorAnimal = animais.slice(0, 3)

  return (
    <ImageBackground source = {fundo} style={styles.imageBackground}>
    <FlatList
      data={trazedorAnimal}
      contentContainerStyle={styles.flatList}
      keyExtractor={(item, index) => index.toString()}
      renderItem={({ item }) => (
        

          <View style={styles.boxTerritorio}>
            <View  style={styles.textFlatlist} >
              <Text style={styles.textTituloFlatlist} >{item.nomeAnimal}</Text> 
              <Text style={styles.textDescricaoFlatlist} >{item.descricaoAnimal}</Text> 
            </View>
           
            <Pressable onPress={()=>navegacao(item.idTerritorio)}>                
              <Image
                    source={{uri: item.imgAnimal}}
                    style={styles.imgFlatlist}
                />
              </Pressable>
          </View>
      )}
      initialNumToRender={2} 
    />
        </ImageBackground> 
  );
}
