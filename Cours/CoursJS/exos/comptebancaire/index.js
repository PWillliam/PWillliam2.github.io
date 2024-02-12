// Créer une classe CompteBancaire qui a l'attribut balance et une méthode getBalance qui donne la solde actuel

// Créer une classe EnregistrementCompte qui est étendu de CompteBancaire avec les attributs balance et interet
// Avec une méthode addInteret qui rajoute des interet

// Créer une classe VerifieCompte qui est étendu de EnregistrementCompte et prend les attributs balance, interet, frais
// Avec une méthode withdraw qui va retirer un certain montant

// Puis créer deux instance de la classe VerifieCompte

class CompteBancaire {
    constructor(balance) {
        this.Balance = balance
    }
    getBalance() {
        return `Le solde est de ${this.Balance}`;
    }
}

class EnregistrementCompte extends CompteBancaire {
    constructor (balance, interet){
        super(balance)
        this.Interet = interet
    }
    addInteret () {
        // this.Balance = this.Balance * this.interet / 100
        // Ou 
        this.Balance *= this.interet / 100
    }
}

class VerifieCompte extends EnregistrementCompte {
    constructor(balance, interet, frais) {
        super(balance, interet);
        this.Frais = frais
    }
    withdraw(montant) {
        if (montant > this.Balance) {
            return 'Le montant à retirer est supérieur au solde du compte'
        } else {
            this.Balance -=  montant + this.Frais
            return `Vous venez de retirer ${montant}, votre nouveau solde est de ${this.Balance}`
        }
    }
}





const Compte1 = new VerifieCompte(100, 10, 2)

const Compte2 = new VerifieCompte(50, 4, 5)

console.log(Compte1)