function calc() {
  let A = document.getElementById("age").value;
  let W = document.getElementById("weight").value;
  let H = document.getElementById("height").value;
  let S
  let R


  // input check
  if (document.getElementById("age").value.length == 0) {

      document.getElementById("ATT")
      document.getElementById("WTT")
      document.getElementById("HTT");

      return

  }

  if (document.getElementById("weight").value.length == 0) {

      document.getElementById("ATT")
      document.getElementById("HTT")
      document.getElementById("WTT")
      
      return

  }

  if (document.getElementById("height").value.length == 0) {

      document.getElementById("ATT")
      document.getElementById("WTT")
      document.getElementById("HTT")
      
      return

  }


  
  if (document.getElementById("male").checked) {
      S =  Math.round((9.99*W)+(6.25*H)-(4.92*A)+5)
  } else if (document.getElementById("female").checked) {
      S =  Math.round((9.99*W)+(6.25*H)-(4.92*A)-161)
  }

  
  if (document.getElementById("0").selected) {
      R = S
  }

  if (document.getElementById("1").selected) {
      R = S*1.2
  }


  if (document.getElementById("2").selected) {
      R = S*1.35
  }

 
  if (document.getElementById("3").selected) {
      R = S*1.55
  }
  

  if (document.getElementById("4").selected) {
      R = S*1.75
  }


  if (document.getElementById("5").selected) {
      R = S*1.95
  }

  document.getElementById("ATT")
  document.getElementById("HTT")
  document.getElementById("WTT")

  document.getElementById("age").placeholder = " "
  document.getElementById("weight").placeholder = "Kg"
  document.getElementById("height").placeholder = "Cm"

  document.getElementById("a").innerHTML = Math.round(R)

  document.getElementById("b").innerHTML = Math.round(R*0.80)

  document.getElementById("c").innerHTML = Math.round(R*1.20)

  document.getElementById("Final")
}
