fun main() {
    val range1 = 0..100
    println(range1)

    var range2 = 0..200 step 5
    println(range2)
    println(range2.count())
    println(range2.contains(50))
    println(range2.contains(300))
    println(range2.first)
    println(range2.last)
    println(range2.step)

}