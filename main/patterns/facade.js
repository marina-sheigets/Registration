/*var Facade=function(name)
{
    this.name=name
}

Facade.prototype={
    applyFor:function(amount)
    {
        var result="approved"
        if(!new checkPassword().verify(this.name,lengthPassword))
        {
            result="denied"
        }
        return this.name+"has been"+result+"in access."
    }
}

var checkPassword=function()
{
    this.verify=function(name,)
}
*/
class checkPassword{
    verify(password)
    {
        return (password.length >7)
    }
}

class Name{
    check(name)
    {
        return true
    }
}

class Facade{
    constructor(name)
    {
        this.name=name
    }

    applyFor(password)
    {
        let isApproved=new checkPassword().verify(password)
        let result
        if(isApproved)
        {
            result='approved'
        } 
        else{
            result='denied'
        }
        const userName=new Name().check(this.name)

        return `${this.name} has been ${result} in access.`
    }
}

const facade=new Facade('Marina')
const password =facade.applyFor('yhffssds43f')
console.log(password)

const facade1=new Facade('Oleg')
const password1 =facade1.applyFor('yhf')
console.log(password1)