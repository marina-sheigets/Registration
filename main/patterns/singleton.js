const singleton = (function() {
    let instance;
    
    function User(email, password) {
      this.email =email;
      this.password = password;
    }

    return {
      getInstance: function(email, password) {
        if(!instance) {
          instance = new User(email, password);
        }
        return instance;
      }
    }
  })();
  const user1 = singleton.getInstance('marina@gmail.com', 1223121);
  const user2 = singleton.getInstance('mark@gmail.com', 364565);
  
  console.log(user1);
  console.log(user2);
  