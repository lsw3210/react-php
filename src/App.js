import React, { Component } from 'react';
import './App.css';

class App extends Component {
  render(){
    return (
      <div className="App">
        Hello
        <input type="button" value="get data" onClick={
          function(){
            fetch('test.php')
            .then(function(response){
              return response.json();
            })
            .then(function(json){console.log(json);})
          }
        }></input>
      </div>
    );
  }
}

export default App;