fun main() {
     tailrec fun display(nilai:Int):Unit{
        println("JOIN $nilai")
        if(nilai > 0){
            display(nilai - 1)
        }
    }

    tailrec fun display2(nilai:Int,total: Int = 1):Int {
        return when(nilai){
            1 -> total
            else -> display2(nilai-1, total*nilai)
        }
    }
    //display(10000)
    println(display2(10))
}