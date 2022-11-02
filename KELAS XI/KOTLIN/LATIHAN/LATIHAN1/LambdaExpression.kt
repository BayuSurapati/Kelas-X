fun upperCase(value: String): String = value.toUpperCase()

val lamb: (String)-> String = {lol: String ->
    val fullname = "$lol"
    fullname
}

fun main() {
    //Lambda Expression
    val lambdaEx: (String) -> String = {nama:String ->
        val namaLengkap = "$nama"
        namaLengkap
    }
    //Lambda with it Expression
    val sayHello: (String) -> String = {
        "Hello $it"
    }
    //Lambda Method References
    val upper : (String) -> String = ::upperCase
    println(upperCase("joni enak"))

    val hasil = lambdaEx("Nyoman Bayu Surapati")
    println(hasil)

    println(lamb("LOl"))
    println(sayHello("Bayu"))
}