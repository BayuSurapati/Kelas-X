//Function Basic
fun halo(){
    println("Hai Cantik")
    var a: Short = 30
    var b = 505

    var c = a+b

    print(c)
}

//Function with parameter
fun wkwk(angka1: Int, angka2: Int){
    print("Jumlah angka = ")
    println(angka1+angka2)
}

//Function with Default Parameter
fun argument(hello1: String, wow:String? = null){
    if(wow == null)
    {
        println("Hello $hello1")
    }else{
        println("Hello $hello1 $wow")
    }
}

//Function Named Argument
fun named(angka9: Int, angka8: Short, angka7: Byte){
    println("Ini adalah urutan angka angkanya $angka9 $angka8 $angka7")

}

//Function Unit Return
fun printHello(hello:String?): Unit{
    if(hello == null){
        println("Halo")
    }else{
        println("halo $hello")
    }
}

//Function Return Type
fun sum(a: Int, b:Int):Int{
    var total = a+b
    return total
}

fun main() {
    halo()
    println()
    wkwk(22,32)

    argument("Budi","Santoso")
    argument("joko","wow")

    named(angka7 = 22, angka8 = 10, angka9 = 100)
    printHello("Joko")
    println()

    var result = sum(22,55)
    println(result)
}