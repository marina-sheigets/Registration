class User {
    constructor(email, password){
      this.email = email
      this.password = password
    }
  
    getEmail(){
      return this.email
    }
  
    getPassword(){
      return this.password
    }
  }

  const UserFactory = {
    createUser : (email, password) => new User(email, password)
  }

  const user = UserFactory.createUser("Vasya@gmail.com", 5453243)
 
  console.log(user)

