var unlock1 = false;
var unlock2 = false;
var seq1 = 1;
var seq2 = 1;

function Seq1() {
    var code = 3;
    var code2 = 3;
    if (!unlock2) {
        seq2 = 1;
        if (unlock1) {
            unlock1 = false;
            seq1 = 1;
        }
    }
    if (seq1 == code) {
        unlock1 = true;
    } else if (seq1 > code) {
        if (unlock1 && unlock2) {
            if (seq1 == code + code2) {
                window.location.href = "./fdd146b2c100a0c7e37994291a4f5dbee16e7af48b78ed7973f0dc0767fc4e50/";
            } else if (seq1 > code + code2) {
                seq1 = 0;
                seq2 = 1;
                unlock1 = false;
                unlock2 = false;
            }
        }
    }
    seq1++;
}

function Seq2() {
    let code = 2;
    if (unlock1 && !unlock2) {
        if (seq2 > code) {
            unlock2 = false;
            seq2 = 0;
        } else if (seq2 == code) {
            seq2 = 0;
            unlock2 = true;
            //window.location.href = "./fdd146b2c100a0c7e37994291a4f5dbee16e7af48b78ed7973f0dc0767fc4e50/";
        }
        seq2++;
    } else {
        seq1 = 1;
        if (unlock2) {
            seq2 = 1;
            unlock2 = false;
            unlock1 = false;
        }
    }

}