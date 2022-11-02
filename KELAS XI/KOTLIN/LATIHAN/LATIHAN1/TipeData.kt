const val OJEK = "Onlen"
fun main() {
    val panjang= 90

    var nama:String? = "JoniJoni"
    nama = null

    println(nama?.length)
    println("$OJEK")
    println()

    var range = 0..200 step 5
    println(range)
    println(range.count())
    println(range.contains(50))
    println(range.contains(300))
    println(range.first)
    println(range.last)
    println(range.step)
}