fun main() {
    var age: Byte = 15
    var height: Int = 150
    var distance: Short = 2000
    var panjang: Long = 100000000L

    println(age)
    println(height )
    println(distance)
    println(panjang)

    //floating number
    var value: Float = 98.98F
    var radius: Double =  2342342343.54535

    println(value)
    println(radius)

    //literals
    var decimal: Int = 100
    var hexadecimal: Int = 0XFF
    var binary: Int = 0b1001

    println(decimal)
    println(hexadecimal)
    println(binary)


    //Conversion
    var number: Int = 100

    var byte: Byte = number.toByte()
    var short: Short = number.toShort()
    var int: Int = number.toInt()
    var long: Long = number.toLong()
    var float: Float = number.toFloat()
    var double: Double = number.toDouble()

    println("$byte,$short,$int,$long,$float,$double")
}