

function loadDocInformation(name)
{
	if(name=="doc1")
	{
		//alert("button 1");
		document.getElementById("para").innerHTML="<h3>Dr.Samanthi Fernando</h3><h4>Consultant Cardiologist<h4></h1>Doctor Samanthi is a reknown Cardiac specialist.<br> Doctor has work experience of 10 years.<br>She is a proud alumni of University of Colombo.<br>She also holds a Masters in Cardiology from Deakin university Australia.<br>Her patients constantly praise her for her knowledge and her care.<br><h4>Visiting Hospitals:</h4>Nawaloka Hospital<<br>Asiri surgical<br>Lanka Hospital<br>Hemas Hospital<br><h4>contact Information :</h4>samanthi_f@gmail.com<br>";
		document.getElementById("docts").src="images/doctor1.jpg";
	}
	else if(name=="doc2")
	{
		//alert("button 2");
		document.getElementById("para").innerHTML="<h3>Dr.Aron Ferdinanduz</h3><h4>Consultant ENT Surgeon<h4></h1>Doctor Aron well recognised ENT Suregeon.<br> Doctor has work experience of 25 years.<br>Proud alumni of Monash university : Australia.<br>Holder of FRSC from  The Queen's University Belfast.<br>Doctor has a of record 99% success rate in sugeries.<br><h4>Visiting Hospitals:</h4><br>Nawaloka Hospital<br>Asiri surgical<br>Durdans Hospital<br>Hemas Hospital<br><h4>contact Information :</h4>aron_fsc@gmail.com<br>";
		document.getElementById("docts").src="images/doctor2.jpg";
	}
	else if(name=="doc3")
	{
		//alert("button 3");
		document.getElementById("para").innerHTML="<h3>Dr.Edman Diaz</h3><h4>Consultant Cancer specialist<h4></h1>Doctor Edmand is known for his knowledge among the Cancer community. <br> Doctor has work experience of 40 years.<br>Proud alumni of Oxford University.<br>A Phd holder from the Oford university <br>Doctor is known for his innovative methods of patient care<br><h4>Visiting Hospitals:</h4><<br>Nawaloka Hospital<br>Asiri surgical<br>Durdans Hospital<br>Maharagame Apeksha Hospital<br><h4>contact Information :</h4><br>edman123@gmail.com<br>"
		document.getElementById("docts").src="images/doctor.jpg";
	}
	else if(name=="doc4")
	{
		//alert("button 4");
		document.getElementById("para").innerHTML="<h3>Dr. Sukshma Singh</h3><h4>Consultant General physician</h4><br>Doctor Sukshma specialize in noncommunicable diseases.<br> Doctor has work experience of 30 years.<br>Proud alumni od University of Peradeniya.<br>Doctor hold a matsers in noncommunicable diseases from the university of Tubingen<br>Doctor Sukshma is one of the most consluted doctor in her specialization.<br><h4>Visiting Hospitals:</h4><br>Nawaloka Hospital<br>Asiri surgical<br>Durdans Hospital<br>Hemas Hospital<br><h4>contact Information :</h4></li><li>sukshmas@gmail.com<br>";
		document.getElementById("docts").src="images/doctor4.jpg";
	}
	else
	{
	    alert("error");	
	}
}

function loadHospitalInformation(name)
{
	if(name=="hos1")
	{
		//alert("button 4");
		document.getElementById("para_hosp").innerHTML="The flagship hospital of Hemas Hospitals chain, located in a close proximity to Colombo caters to a wide geographical area of Sri Lanka with a complete array of advanced medical & surgical facilities supported by a highly skilled team of clinical and nonclinical teams of professionals.";
		document.getElementById("hosp").src="images/HEMAS.jpg";
	}
	else if(name=="hos2")
	{
		//alert("button 6");
		document.getElementById("para_hosp").innerHTML="Nawaloka Hospital was established in 1985 by Deshamanya H. K. Dharmadasa. Nawaloka Hospital is one of Sri Lanka's largest private hospitals and has created a chain of hospitals across the country. It was founded by H.K. Dharmadasa in 1985. It is also the first hospital in Sri Lanka to introduce Intensive Care Units, Coronary Care Units, Laparoscopic Surgery and Thoracic Surgery";
		document.getElementById("hosp").src="images/Nawa.png";
	}
	else if(name=="hos3")
	{
		//alert("button 7");
		document.getElementById("para_hosp").innerHTML="At Asiri Surgical Hospital we are committed to being efficient and dynamic in specialized surgical services. Our patients receive the best care thanks to our dedicated and experienced staff. Highly driven by technology, Asiri Surgical hospital stands out for its best practices in introducing the latest equipment for surgeries and scanning. For example, it is the only hospital in Sri Lanka equipped with nuclear medicine (PET Scanner).";
		document.getElementById("hosp").src="images/Asiri.jpg";
	}
	else if(name=="hos4")
	{
		//alert("button 8");
		document.getElementById("para_hosp").innerHTML="Durdans Hospital has been a trusted name in Sri Lankan healthcare for more than seven decades. Since our foundation in 1945, we have built a reputation for regional leadership in medical excellence and innovation, based on a simple philosophy: that improving the health of our community should be driven by passion as well as compassion";
		document.getElementById("hosp").src="images/Durdans.jpg";
	}
	else
	{
	    alert("error");	
	}
}

function loadNewBenefits(name)
{
    if(name=="new")
	{
	//alert("button 9");
	document.getElementById("para_benef").innerHTML="The New benefits will be displayed here";
	}
	else if(name=="new2")
	{
	//alert("button 9");
	document.getElementById("para_benef1").innerHTML="Other company provided benefits will be displayed here";
	}
}

