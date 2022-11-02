//Function Single Expression
fun singleEx(a: Float, b: Float): Float = a*b
fun hello(nama:String): Unit = println(nama)

//Function varArg
fun hitungVararg(a:Int, vararg bA:Int): Int{
    var total=0

    for(nilai in bA){
        total += nilai
    }
    return total
}

//Extension Function
fun String.magic(): String = "halo $this"

//Function Infix Notation
infix fun String.to(Abc: String): String{
    if(Abc == "LOL"){
        println("HAHAHAHA")
    }else{
        println("SORRY")
    }
    return toString()
}

fun main() {
    var result =singleEx(2.2F, 3.2F )
    println(result)

    hello("Nyoman")

    println(hitungVararg(15,20,99,30))

    var nama = "Jowo"
    println(nama.magic())

    val hasil: String = "Nyoman" to "LOL"
    println(hasil)
}