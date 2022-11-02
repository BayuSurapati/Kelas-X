//Factorial loop
fun factorialLoop(nilai: Int):Int{
    var hasil = 1
    for(i in nilai downTo 1){
        hasil *= i
    }
    return hasil
}

//Recuresive
fun recursive(a:Int):Int{
    return when(a){
        1->1
        else-> a*recursive(a-1)
    }
}

fun main() {
    println(factorialLoop(30))
    println(recursive(30))
}