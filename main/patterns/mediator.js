class Comment{
    showMessage(user,message){
        const time=new Date().toLocaleDateString()
        const sender=user.getEmail()
        console.log(`${time} [${sender}]: ${message}`)
    }
}

class Users{
    constructor(email,commentMediator)
    {
        this.email=email
        this.commentMediator=commentMediator
    }
    getEmail()
    {
        return this.email
    }

    send(message)
    {
        this.commentMediator.showMessage(this,message)
    }
}

const mediator=new Comment()

const Marina=new Users('marina@gmail.com',mediator)
const Oleg=new Users('olegevst@gmail.com',mediator)

Marina.send('Привіт.Як справи?')
Oleg.send('Все добре.')