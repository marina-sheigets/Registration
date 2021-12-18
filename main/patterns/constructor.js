class Article  { 
    constructor(builder) {
        this.name = builder.name
        this.region = builder.region || false
        this.city = builder.city || false
        this.shortDescription = builder.shortDescription || false
    }
}

class ArticleBuilder {

    constructor(name) {
        this.name = name
    }

    addRegion() {
        this.region = true
        return this
    }

    addCity() {
        this.city = true
        return this
    }

    addshortDescription() {

        this.shortDescription = true
        return this
    }

    
    build() {
        return new Article(this)
    }
}


const article1 = (new ArticleBuilder("ДП УД НДІ Конструкційний матеріалів «Прометей»"))
    .addRegion("Донецька область")
    .addCity("Маріуполь")
    .addshortDescription("Дослідження і розробки в галузі природничих та технічних наук")
    .build()


console.log(article1)

const article2 = (new ArticleBuilder("ДП «45 експериментальний механічний завод»"))
    .addRegion("Вінницька область")
    .addshortDescription("Завод є провідним підприємством з виробництва технічних засобів транспортування, заправки, перекачування і зберігання нафтопродуктів.")
    .build()

console.log(article2)
