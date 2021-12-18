class TemplateArticle{


    getName() {
        return "ДП"
    }

    getRegion()
    {
        return "Область:"
    }

    getCity()
    {
        return "Місто:"
    }

    getDescription() {
        return 'Сфера діяльності:'
    }
}

//Створимо декілька постів

class Article1 {

    constructor(article)
    {
        this.article=article
    }

    getName() {
        return this.article.getName() + ' УД НДІ Конструкційний матеріалів «Прометей»'
    }

    getRegion()
    {
        return this.article.getRegion()+' Донецька'
    }

    getCity()
    {
        return this.article.getCity()+" Маріуполь"
    }

    getDescription() {
        return this.article.getDescription()+' Дослідження і розробки в галузі природничих та технічних наук'
    }

}

class Article2 {

    constructor(article)
    {
        this.article=article
    }

    getName() {
        return this.article.getName() + ' «45 експериментальний механічний завод»'
    }

    getRegion()
    {
        return this.article.getRegion()+' Вінницька'
    }

    getCity()
    {
        return this.article.getCity()+" Вінниця"
    }

    getDescription() {
        return this.article.getDescription()+' Завод є провідним підприємством з виробництва технічних засобів транспортування, заправки, перекачування і зберігання нафтопродуктів.'
    }

}


let someArticle
someArticle=new TemplateArticle();


someArticle=new Article1(someArticle);
console.log(someArticle.getName());
console.log(someArticle.getRegion());
console.log(someArticle.getCity());
console.log(someArticle.getDescription());

let someArticle1
someArticle1=new TemplateArticle();
someArticle1=new Article2(someArticle);
console.log(someArticle1.getName());
console.log(someArticle1.getRegion());
console.log(someArticle1.getCity());
console.log(someArticle1.getDescription());
