fun labelBreak(){
    loopI@ for(i in 1..10){
        loopJ@ for(j in 1..10){
            if(j > 4){
                break@loopI
            }
            println("$i * $j = ${i*j}")
        }
    }
}

fun labelContinue(){
    loopI@ for(i in 1..10){
        loopJ@ for(j in 1..10){
            if(j == 5){
                continue@loopI
            }
            println("$i * $j = ${i*j}")
        }
    }
}

fun turn(name: String, param:(String)->Unit):Unit = param(name)
fun main() {
    turn("Bayu")testLabel@{
        if(it == ""){
            return@testLabel
        }else{
            println("Nyoman")
        }
    }
}