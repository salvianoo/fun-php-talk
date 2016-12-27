var Pessoa = function (name='Salviano') {
  return {
    'getName' : function() {
      return name;
    },
    'setName' : function(newName) {
      name = newName;
    }
  }
}

pessoa = Pessoa()
console.log( pessoa.getName() )
pessoa.setName('Ted')
console.log( pessoa.getName() )
