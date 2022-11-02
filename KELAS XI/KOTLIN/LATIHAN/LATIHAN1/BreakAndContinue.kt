fun main() {
    // Kata Kunci Break
    var i = 1
    while(true){
        println("Stop Me $i")
        i++

        if(i>=10){
            break
        }
    }

    //Kata Kunci Continue
    for(i in 1..100){
        if(i % 2 == 0){
            continue
        }
        println("angka $i")
    }
}