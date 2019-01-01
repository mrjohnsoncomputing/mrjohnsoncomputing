class Period {
    constructor(y,g,r,s,t,d) {
        let a = parseInt(y)
        if (a != NaN) {
            this.year = y;
            this.group = g;
            this.room = r;
            this.subject = s;
            this.teacher = t;
            this.doing = d
        } else {
            this.subject = y
        } 
    }
}

const fsgt1 = {
    week1: {
        day1: {
            p1: new Period("12","C","302","Computing","Mr R Easton","Observing"),
            p2: new Period("12","C","302","Computing","Mr R Easton","Observing"),
            p3: new Period("8","L","301","Computing","Mrs A Easton","Observing"),
            p4: new Period("PPA"),
            p5: new Period("Meeting"),
        },
        day2: {
            p1: new Period("PPA"),
            p2: new Period("8","L","301","Digital Literacy","Mrs A Easton","Observing"),
            p3: new Period("8","L","301","Computing","Mrs A Easton","Observing"),
            p4: new Period("PPA"),
            p5: new Period("7","A","305","Computing","Mr B Epsley","Observing"),
        },
        day3: {
            p1: new Period("7","S","302","Digital Literacy","Mr R Easton","Observing"),
            p2: new Period("7","S","302","Digital Literacy","Mr R Easton","Observing"),
            p3: new Period("8","P","305","Computing","Mr B Epsley","Observing"),
            p4: new Period("8","C","301","Computing","Mrs A Easton","Observing"),
            p5: new Period("PPA"),
        },
        day4: {
            p1: new Period("9","C","305","Computing","Mr B Epsley","Observing"),
            p2: new Period("PPA"),
            p3: new Period("11","B","305","Digital Literacy","Mr B Epsley","Observing"),
            p4: new Period("PPA"),
            p5: new Period("PPA"),
        },
        day5: {
            p1: new Period("University"),
            p2: new Period("University"),
            p3: new Period("University"),
            p4: new Period("University"),
            p5: new Period("University"),
        },
    },

    week2: {
        day1: {
            p1: new Period("7","P","302","Computing","Mr R Easton","Observing"),
            p2: new Period("12","C","302","Computing","Mr R Easton","Observing"),
            p3: new Period("8","L","301","Digital Literacy","Mrs A Easton","Observing"),
            p4: new Period("Meeting"),
            p5: new Period("7","L","301","Computing","Mrs A Easton","Observing"),
        },
        day2: {
            p1: new Period("PPA"),
            p2: new Period("8","P","305","Computing","Mr B Epsley","Observing"),
            p3: new Period("PPA"),
            p4: new Period("7","P","302","Computing","Mr R Easton","Observing"),
            p5: new Period("7","L","301","Computing","Mrs A Easton","Observing"),
        },
        day3: {
            p1: new Period("9","C","305","Computing","Mr B Epsley","Observing"),
            p2: new Period("PPA"),
            p3: new Period("PPA"),
            p4: new Period("PPA"),
            p5: new Period("7","A","305","Computing","Mr B Epsley","Observing"),
        },
        day4: {
            p1: new Period("9","C","305","Computing","Mr B Epsley","Observing"),
            p2: new Period("9","C","305","Computing","Mr B Epsley","Observing"),
            p3: new Period("PPA"),
            p4: new Period("8","S","301","Digital Literacy","Mrs A Easton","Observing"),
            p5: new Period("8","S","301","Digital Literacy","Mrs A Easton","Observing"),
        },
        day5: {
            p1: new Period("University"),
            p2: new Period("University"),
            p3: new Period("University"),
            p4: new Period("University"),
            p5: new Period("University"),
        },
    }
}

const fsg = {
    week1: {
        day1: {
            p1: new Period("12","C","302","Computing","Mr R Easton","Observing"),
            p2: new Period("PPA"),
            p3: new Period("8","L","305","Computing","Mrs A Easton","Observing"),
            p4: new Period("9","A","305","ICT","Unknown","Observing"),
            p5: new Period("PPA"),
        },
        day2: {
            p1: new Period("10","A","305","ICT","Unknown","Observing"),
            p2: new Period("PPA"),
            p3: new Period("8","A","301","Computing","Mr R Easton","Observing"),
            p4: new Period("Meeting"),
            p5: new Period("PPA"),
        },
        day3: {
            p1: new Period("7","S","305","Computing","Unknown","Observing"),
            p2: new Period("12","D","305","ICT","Unknown","Observing"),
            p3: new Period("8","P","302","Computing","Mr B Epsley","Observing"),
            p4: new Period("PPA"),
            p5: new Period("7","S","305","Computing","Unknown","Observing"),
        },
        day4: {
            p1: new Period("9","C","302","Computing","Unknown","Observing"),
            p2: new Period("PPA"),
            p3: new Period("PPA"),
            p4: new Period("7","J","305","Computing","Unknown","Observing"),
            p5: new Period("PPA"),
        },
        day5: {
            p1: new Period("PPA"),
            p2: new Period("7","L","301","Computing","Unknown","Observing"),
            p3: new Period("PPA"),
            p4: new Period("9","C","301","Computing","Unknown","Observing"),
            p5: new Period("PPA"),
        },
    },

    week2: {
        day1: {
            p1: new Period("8","J","301","Computing","Unknown","Observing"),
            p2: new Period("12","C","302","Computing","Unknown","Observing"),
            p3: new Period("8","L","305","Computing","Unknown","Observing"),
            p4: new Period("PPA"),
            p5: new Period("PPA"),
        },
        day2: {
            p1: new Period("8","J","305","Computing","Unknown","Observing"),
            p2: new Period("8","P","305","Computing","Unknown","Observing"),
            p3: new Period("8","A","305","Computing","Unknown","Observing"),
            p4: new Period("7","P","305","Computing","Unknown","Observing"),
            p5: new Period("Meeting"),
        },
        day3: {
            p1: new Period("9","C","302","Computing","Unknown","Observing"),
            p2: new Period("12","D","305","ICT","Unknown","Observing"),
            p3: new Period("PPA"),
            p4: new Period("PPA"),
            p5: new Period("PPA"),
        },
        day4: {
            p1: new Period("9","C","302","Computing","Mr B Epsley","Observing"),
            p2: new Period("PPA"),
            p3: new Period("7","J","305","Computing","Unknown","Observing"),
            p4: new Period("8","S","305","Computing","Unknown","Observing"),
            p5: new Period("8","S","305","Computing","Unknown","Observing"),
        },
        day5: {
            p1: new Period("PPA"),
            p2: new Period("7","J","301","Computing","Unknown","Observing"),
            p3: new Period("PPA"),
            p4: new Period("PPA"),
            p5: new Period("PPA"),
        },
    }
}


const marsh = {
    week1: {
        day1: {
            p1: new Period("77","x","106","Cm2","Unknown","Observing"),
            p2: new Period("PPA"),
            p3: new Period("88","Z","107","Cm1","Unknown","Observing"),
            p4: new Period("PPA"),
            p5: new Period("PPA"),
        },
        day2: {
            p1: new Period("10","E","106","Cm1","Unknown","Observing"),
            p2: new Period("10","E","106","Cm1","Unknown","Observing"),
            p3: new Period("PPA"),
            p4: new Period("PPA"),
            p5: new Period("PPA"),
        },
        day3: {
            p1: new Period("9","x","107","Cm2","Unknown","Observing"),
            p2: new Period("12","C","107","Cm1","Unknown","Observing"),
            p3: new Period("PPA"),
            p4: new Period("PPA"),
            p5: new Period("PPA"),
        },
        day4: {
            p1: new Period("PPA"),
            p2: new Period("PPA"),
            p3: new Period("PPA"),
            p4: new Period("9","y","107","Cm2","Unknown","Observing"),
            p5: new Period("88","X","107","Cm1","Unknown","Observing"),
        },
        day5: {
            p1: new Period("11","E","107","Cm1","Unknown","Observing"),
            p2: new Period("9","x","107","Cm1","Unknown","Observing"),
            p3: new Period("9","x","107","Cm1","Unknown","Observing"),
            p4: new Period("9","y","106","Cm1","Unknown","Observing"),
            p5: new Period("PPA"),
        },
    },

    week2: {
        day1: {
            p1: new Period("PPA"),
            p2: new Period("PPA"),
            p3: new Period("PPA"),
            p4: new Period("PPA"),
            p5: new Period("PPA"),
        },
        day2: {
            p1: new Period("9","y","107","Cm1","Unknown","Observing"),
            p2: new Period("PPA"),
            p3: new Period("10","E","106","Cm1","Unknown","Observing"),
            p4: new Period("PPA"),
            p5: new Period("12","C","106","Cm1","Unknown","Observing"),
        },
        day3: {
            p1: new Period("88","X","107","Cm1","Unknown","Observing"),
            p2: new Period("PPA"),
            p3: new Period("PPA"),
            p4: new Period("9","y","107","Cm2","Unknown","Observing"),
            p5: new Period("9","y","106","Cm3","Unknown","Observing"),
        },
        day4: {
            p1: new Period("88","y","107","Cm2","Unknown","Observing"),
            p2: new Period("88","y","107","Cm2","Unknown","Observing"),
            p3: new Period("11","E","107","Cm1","Unknown","Observing"),
            p4: new Period("PPA"),
            p5: new Period("PPA"),
        },
        day5: {
            p1: new Period("9","y","106","Cm3","Unknown","Observing"),
            p2: new Period("PPA"),
            p3: new Period("PPA"),
            p4: new Period("77","x","106","Cm2","Unknown","Observing"),
            p5: new Period("9","x","107","Cm2","Unknown","Observing"),
        },
    }
}






