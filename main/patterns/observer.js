const Post=title=>({
    title:title
})

class createUsers{
    constructor(email)
    {
        this.email=email
    }

    notify(Post)
    {
        console.log(`${this.email}, на нашій веб-сторінці з'явилася нова стаття про ${Post.title}. Не бажаєте переглянути?`)
    }
}

class Board{
    constructor()
    {
        this.signUps=[]
    }

    subscribe(createUsers){
        this.signUps.push(createUsers)
    }

    add(posting){
        this.signUps.forEach(subscriber=>{
            subscriber.notify(posting)
            
        })
    }
}

const marina = new createUsers('marina@gmail.com')
const oleg = new createUsers('oleg@gmail.com')
const katya = new createUsers('katya@gmail.com')


const board = new Board()
board.subscribe(marina)
board.subscribe(oleg)

board.add(Post('ДП «Запорізький автомобільний ремонтний завод»'))
