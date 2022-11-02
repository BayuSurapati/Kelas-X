fun main() {
    fun trailLambda(nama: String, tranform:(String)->String): String{
        return "Hello ${tranform(nama)}"
    }

    val lambdaName: (String)-> String = {value: String ->
        value.toLowerCase()
    }
    val nama = lambdaName("JONI JONI ")
    println(nama)
}