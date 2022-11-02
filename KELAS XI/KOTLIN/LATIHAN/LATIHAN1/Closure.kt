fun main() {
    var konter: Int = 0;

    val lambdaIncrement: () -> Unit = {
        println("Lambda Increment")
        konter++
    }

    val anonimFunc = fun(){
        println("Anonim Function Increment")
        konter++
    }

    fun functionIncrement(){
        println("Increment Lagi")
        konter++
    }

    lambdaIncrement()
    anonimFunc()
    functionIncrement()

    println(konter)

}