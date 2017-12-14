const HOST = 'http://172.17.66.189:8000/api';

import NavigationExperimental from 'react-native-deprecated-custom-components';
import React, { Component } from 'react';
import {
  AppRegistry,
  StyleSheet,
  View,
  // Add more components
  Navigator, // Navigasi scene / activity
  Image,
  ScrollView, 
  RefreshControl, // FItur pull-down-to-refresh untuk ScrollView
  ListView, 
  TouchableHighlight, // Objek yang bisa di-tap
  ActivityIndicator, // Indikator spinner / loading
  StatusBar, // Status bar
} from 'react-native';

import { Container, Header, Title, Content, Footer, FooterTab, Button, Left, Right, 
  Body, Icon, Text,  List, ListItem, 
} from 'native-base';

export default class kelas_react_native extends Component { // Kelas utama
  constructor (props) {
    super(props)
    this.state = {  // Nilai-nilai state awal ditetapkan di sini
      defaultRoute : 'HomeScene', // Navigasi awal mengarah ke kelas HomeScene
    }
  }
  _renderScene (route, navigator) { // Fungsi untuk merender scene
    console.log(route);
    if (route && route.name == 'HomeScene') {
      return <HomeScene navigator={navigator} /> // navigator akan masuk ke this.props.navigator
    }
    if (route && route.name == 'RansumScene') {
      return <RansumScene navigator={navigator} id={route.id}/> // Selain navigator, id akan masuk ke this.props.id
    }
  }
  render () {
    return (
      <NavigationExperimental.Navigator
        initialRoute={{name : this.state.defaultRoute }} // Tetapkan route pertama, diambil dari baris 24
        renderScene={this._renderScene} // Fungsi render scene, ke baris 28
      />      
    )
  }
}

const HomeScene = React.createClass({ // Kelas HomeScene, menampilkan daftar artikel
  getInitialState() {
    var ds = new ListView.DataSource({ rowHasChanged : (r1, r2) => r1 !== r2 }); // Inisiasi dataSource untuk ListView
    return {  // Tetapkan nilai awal untuk state
      list : ds.cloneWithRows([]), // daftar artikel kosong, akan di-load di componentDidMount
      spinner : false,
    }
  },
  componentDidMount () { // Fungsi yang dijalankan setelah komponen dirender 
    this._fetch(); // Tarik data
  },
  componentWillMount () { // Fungsi yang dijalankan sebelum komponen dirender
  },
  _fetch() { // Fungsi untuk menarik data daftar artikel
    this.setState({ spinner : true }); // Tampilkan spinner
    fetch(HOST + '/ransums')
    .then((result) => {
      console.log(result);
      this.setState({ spinner : false }); // Sembunyikan spinner
      var ds = new ListView.DataSource({ rowHasChanged : (r1, r2) => r1 !== r2 });
      var body = JSON.parse(result._bodyInit); // Parse JSON ke objek.
      this.setState({ list : ds.cloneWithRows(body) }); // Masukkan data ke state list
    })
  },
  _onPress (id) { // Fungsi navigasi ke halaman artikel
    if (!id) { // Abaikan jika tidak ada parameter
      return;
    }
    this.props.navigator.push({name : 'RansumScene', id : id}); // Menambahkan RansumScene ke stack navigasi, halaman pindah ke RansumScene
  },
  render () {
    return (
      <Container>
        <Header style={{ backgroundColor: '#43a047' }}>
          <Left>
            <Button transparent>
              <Icon name='menu' />
            </Button>
          </Left>
          <Body>
            <Title>Dairy Feed</Title>
          </Body>
          <Right />
        </Header>
        <Content>
          <View>
            <ScrollView
              refreshControl={
                <RefreshControl
                  refreshing={this.state.spinner}
                  onRefresh={this._fetch} // Pasang fungsi penarik data di sin
                />
              }
            >
              <List>
                <ListView 
                  dataSource={this.state.list} // Sumber data
                  enableEmptySections={true}
                  renderRow={(rowData) => 
                    <ListItem>
                      <Body>
                        <Text>{ rowData.name }</Text>
                        <Text note>Price: { rowData.total_price }/kg</Text>
                      </Body>
                      <Right>
                        <Button small transparent info onPress={() => this._onPress(rowData.id)}>
                          <Icon name='arrow-forward' />
                        </Button>
                      </Right>
                    </ListItem>
                  }
                >
                </ListView>  
            </List>
            </ScrollView>
          </View>
        </Content>
        <Footer style={{ backgroundColor: '#43a047' }}>
          <FooterTab>
            <Button>
              <Text>Ransum</Text>
            </Button>
            <Button>
              <Text>Formulate</Text>
            </Button>
            <Button>
              <Text>Lactation</Text>
            </Button>
          </FooterTab>
        </Footer>
      </Container>
    )
  }
})

const RansumItem = React.createClass({ // Kelas RansumItem, berisi komponen yang menampilkan gambar dan judul artikel, dapat di-tap.
  getInitialState() {
    return {
    }
  },
  render () {
    return (
      <TouchableHighlight 
        onPress={() => this.props.onTap(this.props.data.id) } // fungsi navigasi ini larinya ke fungsi onTap milik HomeScene
      > 
         <View>
          <Text style={{marginBottom:15}}>{this.props.data.name}</Text>
        </View>
      </TouchableHighlight>
    )
  }
})

const RansumScene = React.createClass({
  getInitialState() {
    return {
      title : 'Ransum',
      data : { id : 0 },
    }
  },
  componentDidMount () {
    this._fetch(this.props.id); // Tarik data 
  },
  componentWillMount () {
  },
  _fetch(id) { // Fungsi untuk menarik data berasarkan ID
    fetch(HOST + '/ransums/' + id)
    .then((result) => {
      this.setState({data : JSON.parse(result._bodyInit) }); // Masukkan hasilnya ke state data
    })
  },
  _onTap() {
    return // Do nothing
  },
  _back () { // Fungsi navigasi kembali
    this.props.navigator.pop(); // Lepas scene terakhir dari stack navigasi, akan kembali ke halaman sebelumnya
  },
  render () {
    return (
      <Container>
        <Header style={{ backgroundColor: '#43a047' }}>
          <Left>
            <Button transparent>
              <Icon name='menu' />
            </Button>
          </Left>
          <Body>
            <Title>Dairy Feed</Title>
          </Body>
          <Right />
        </Header>
        <Content>
          <View>
            <ScrollView>
            <Text style={{marginBottom:15}}>{this.state.data.explanation}</Text>
            </ScrollView>
          </View>
        </Content>
        <Footer style={{ backgroundColor: '#43a047' }}>
          <FooterTab>
            <Button>
              <Text>Ransum</Text>
            </Button>
            <Button>
              <Text>Formulate</Text>
            </Button>
            <Button>
              <Text>Lactation</Text>
            </Button>
          </FooterTab>
        </Footer>
      </Container>
    )
  }
})

const styles = StyleSheet.create({ // Styles
  bodyText : {
    margin: 15,
  }
});

AppRegistry.registerComponent('kelas_react_native', () => kelas_react_native);
