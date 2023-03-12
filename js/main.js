const open_one= document.getElementById('open1');
const open_two= document.getElementById('open2');
const open_three= document.getElementById('open3');
const modal_container=document.getElementById('modal_container');
const close=document.getElementById('close');
const title = document.getElementById("title")
const description = document.getElementById("description") 

open_one.addEventListener('click',()=>{
    title.innerText = "Individual Health Insurance Plan";
    description.innerText = "HI Insurance Individual Health Insurance Plan is a product that covers the entire life span of the insured. It has several attractive features which cater to almost all Life Insurance needs (protection) of a person to in line with different levels of coverage required for the different stages in your life. Further to the above we provide the maximum possible returns on your investments (savings) based on actual return on investments of the company.";
    modal_container.classList.add('show');
});

open_two.addEventListener('click',()=>{
    title.innerText = "Family Health Insurance Plan";
    description.innerText = "HI Insurance Family Plan is an endowment plan which provides a life cover during the term of the policy or a lump sum payment together with accumulated bonuses declared every year on reversionary basis at maturity.Regular periodic payments Monthly, Quarterly, Half Yearly & Yearly are applicable under this policy.HI Insurance Family Plan offers a FREE life cover for 10 years until Completion of 70 years of Age after Maturity.";
    modal_container.classList.add('show');
});

open_three.addEventListener('click',()=>{
    description.innerText = "HI Insurance Premium Relief Plan is guaranteeing a full premium refund at the end of the policy term whilst providing the protection benefits throughout the original term which starts from a minimum term of 5 to a maximum of 30 years.Customer can select the “Premium Paying Term” while the original “Policy Term” operates as a separate one even after the completion of the premium paying term, the cover will continue till Maturity.";
    title.innerText = "Premium Member Plans";
    modal_container.classList.add('show');
});

close.addEventListener('click',()=>{
    modal_container.classList.remove('show');
});