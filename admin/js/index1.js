        var answer1 = document.getElementById("answer1").value
          ,answer2 = document.getElementById("answer1").value
          ,answer3 = document.getElementById("answer1").value
          ,answer4 = document.getElementById("answer1").value
            , correct = document.getElementById("correct").value;

         function chkcorr(){
          alert("suck out ");
          correct.setCustomValidity("a==correct");
            if(answer1==correct) 
            {
              alert("heloo"+answer1);
              correct.setCustomValidity("a==correct");
            }
            else if(answer2.value==correct.value)
            {
              alert("heloo"+answer1);
              correct.setCustomValidity('b==correct');
            }
            else if(answer3.value==correct.value)
            {
              correct.setCustomValidity('c==correct');
            }
            else if(answer4.value==correct.value)
            {
              correct.setCustomValidity('d==correct');
            }
            return false;
          }

          answer1.onchange = chkcorr;
           answer2.onchange = chkcorr;
            answer3.onchange = chkcorr;
             answer4.onchange = chkcorr;
          correct.onkeyup = chkcorr;
