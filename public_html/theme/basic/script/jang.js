var local = localStorage.getItem("local");

if(local == null) {
    local = "en-US";
}


if(local === "ko-KR"){
    $(".us").addClass("nnnnone")
    $(".kor").removeClass("nnnnone")
}

$(".alert").click(function () {
    if(local === "ko-KR"){
        alert("준비중입니다.")
    }

    if(local === "en-US"){
        alert("In ready.")
    }
})

$.i18n.init({
    //lng: 'en-US',
    //lng: 'ko-KR',
    lng: local,
    debug: true,
    useLocalStorage: true,
    localStorageExpirationTime: 86400000, // in ms, default 1 week
    resStore: {
        "en-US": {
            "INDEX": {
                "1":"Stacking refers to the way in which a POS (Proof of Stake)-type crypto is fixed on the network with equity and rewarded with proof of work.",         
                "2":"The Proof of Stake (POS) method is a block chain based on the equity verification of the consensus algorithm, and it has an excellent advantage in security as certain nodes cannot dominate the network because they prove their work based on the Cryptocurrency.",         
                "3":"Recently, Staking has entered the realm of DeFi (decentralized financing). The system of obtaining compensation through Staking is recognized as a financial instrument and the Staking service is launched in DeFi service category.",                  
                "4":"The idea of incorporating Staking into DeFi services stems from the idea that the rewards of Staking are all 'interest.'",                  
                "5":"As such, Staking's compensation approach is interest, resulting in DeFi service financial instruments. Service users will not be able to move the Cryptocurrency used for Staking for a certain period of time through lock-up to stabilize the block chain network and receive a certain percentage of interest during the lock-up period.",          
         

                "7":"There are countless Staking products in DeFi service.",         
                "8":"For example, there are cases in which major-class crypto-stakeings such as Bitcoin or Ethereum are paid as compensation, or sometimes different types of crypto-stake are paid as compensation.",         
                "9":"On the other hand, in the case of compensation, there are a variety of Staking products, such as products that are paid in batches after the Staking period and ways to pay interest and principal every day.",         
                "10":"ADDPLUS' Staking product is a product optimized for users' needs and aims to seek maximum compensation while protecting users' investments as much as possible with a portfolio recommendation system.",         
                "11":"ADDPLUS will be composed of two main PLATFORM products: ETH PLATFORM first and USD PLATFORM second.",         
                "12":"Both PLATFORM have their own characteristics and advantages and are products that take into account the user's side.",       
                
                
                "t1":"ETH PLATFORM",
                "13":"ADDPLUS' first PLATFORM is a product with a high rate of compensation to the user's investment, and the ADPS issued by the foundation is linked to the price of the listed exchange, resulting in the user's investment and compensation.",         
                "t2":"USD PLATFORM",
                "14":"The second PLATFORM of ADDPLUS is USD PLATFORM. One of the biggest concerns for users starting to invest is the loss of investment funds. In particular, the price fluctuation of the crypto I invested in in the volatile market of crypto makes me feel a lot of stress. ADD PLUS has come up with USD PLATFORM as an alternative to these users.",         
          

                "18":"▶ Platform Operating Costs (40%)",         
                "19":"The success or failure of the platform is not only accomplished by successful platform development but also by the best platform operation. The ADDPLUS Team will be used for operational and service teams for smooth and pleasant operation, and we will do our best to expedite user principal and compensation payments on the platform.",         
                "20":"▶ Development (30%)",         
                "21":"The ADDPLUS Team will use the funds raised for the platform development, maintenance, production, development and design team's labor costs.",         
                "22":"▶ Marketing expenses (20%)",         
                "23":"ADDPLUS will be used for public relations, marketing and partnership activities with partner foundations and companies to promote ADDPLUS worldwide.",         
                "24":"▶ Administrative expenses (10%)",         
                "25":"To run the ADDPLUS Foundation ethically, it requires compliance with laws, duties of tax collection, and a clear disclosure of the company's business conditions. As a result, ADDPLUS will use legal, tax and accounting services as administrative expenses.",
            },
        },
        "ko-KR": {
            "INDEX": {
                "1":"스테이킹이란 POS(Proof of Stake)방식의 암호화폐를 지분으로 네트워크를 고정하고 작업증명 보상을 받는 방식을 말한다.",         
                "2":"POS(Proof of Stake)방식이란 합의 알고리즘의 지분증명을 기초로 하는 블록체인으로 암호화폐를 기준으로 작업증명을 하기 때문에 특정 노드가 네트워크를 장악할 수 없어 보안에 뛰어난 장점을 가지고 있다.",         
                "3":"최근에는 DeFi(탈중앙화금융)의 영역에 스테이킹이 진입을 하고 있다. 스테이킹으로 보상을 얻는 행위 자체를 금융상품으로 인식하고 DeFi 서비스 종목에 스테이킹 서비스를 출시하게 되었다.",                  
                "4":"스테이킹을 DeFi 서비스에 접목 하게된 아이디어는 스테이킹을 통해 얻게되는 보상이 일종의 '이자'라는 생각에서 비롯되었다.",                  
                "5":"이렇듯 스테이킹의 보상이 이자라는 방식으로 접근하여 DeFi  서비스 금융상품이 나오게 된다. 서비스 사용자는 스테이킹에 쓰이는 암호화폐를 블록체인 네트워크의 안정화를 위한 락업으로 일정기간 움직일수가 없게 되며 락업 기간동안 일정 비율의 이자를 지급 받게되는 서비스이다.",          
         

                "7":"DeFi 서비스의 스테이킹 상품의 종류는 수없이 많은 상품이 존재한다.",         
                "8":"예로 비트코인 혹은 이더리움 같은 메이져급의 암호화폐를 예치하고 보상으로 에치한 암호화폐를 지급하거나 혹은 재단이 발행한 암호화폐를 보상으로 지급하는 경우도 있다.",         
                "9":"또한 보상 같은 경우 예치기간 이후 일괄로 지급하는 상품과 일별로 이자와 원금을 지급하는 방식등 다양한 스테이킹 상품이 존재한다.",         
                "10":"ADDPLUS의 스테이킹 상품은 사용자의 니즈에 최적화된 상품으로 포트폴리오를 구성 추천하는 시스템으로 사용자의 투자금을 최대한 보호하면서 최대한의 보상을 추구하는것을 목표로 한다.",         
                "11":"ADDPLUS의 스테이킹 상품으로는 크게 두가지 PLATFORM 첫번째는 ETH PLATFORM 두번째로 USD PLATFORM 구성이 될 예정이다.",         
                "12":"두가지 PLATFORM  모두 각각의 특색과 장점을 가지고 있으며 사용자 측면을 고려한 상품이다.",       
                
                
                "t1":"이더리움 플랫폼",
                "13":"ADDPLUS의 첫번째 PLATFORM 사용자의 투자금 대비 보상률이 높은 장점을 가지고 있는 상품으로 재단에서 발행한 ADPS가 상장된 거래소의 가격과 연동이 되어 사용자의 투자금과 보상이 산출되어지는 방식이다.",         
                "t2":"USD 플랫폼",
                "14":"ADDPLUS의 두번째 PLATFORM USD PLATFORM 이다. 투자를 시작하는 사용자들의 가장큰 고민중 하나는 투자원금의 손실 이다. 특히 변동이 심한 암호화폐 시장에서 내가 투자한 암호화폐에 대한 가격 변동은 많은 스트레스를 쌓게 한다. ADD PLUS는 이러한 사용자들에 대한 대안으로 USD PLATFORM 기획하게 되었다.",         
          

                "18":"▶ 플랫폼 운영비용 (40%)",         
                "19":"플랫폼의 성패는 성공적인 플랫폼 개발뿐만이 아닌 최상의 플랫폼 운영으로 완성이 된다. ADDPLUS Team은 원활하고 쾌적한 운영을 위하여 운영팀과 서비스팀을 위해 사용할 예정이다. 플랫폼에서의 사용자 원금 및 보상 지급이 신속히 처리되도록 최선을 다할 것이다.",         
                "20":"▶ 개발 (30%)",         
                "21":"ADDPLUS Team은 모집한 자금을 플랫폼 개발 및 유지보수, 제작, 개발팀과 디자인팀의 인건비로 사용예정이다",         
                "22":"▶ 마케팅 비용 (20%)",         
                "23":"ADDPLUS를 전세계적으로 알리기 위한 홍보, 마케팅 그리고 파트너 재단 및 회사와의 제휴 활동을 위하여 사용할 예정이다.",         
                "24":"▶ 행정비용 (10%)",         
                "25":"ADDPLUS 재단을 윤리적으로 운영하기 위해서는 법률의 준수, 잡세의 의무, 회사 경영상황의 토명한 공개를 필요로 한다. 이에 ADDPLUS는 법무, 세무, 회계등의 업무를 행정비용으로 책정하여 사용할 예정이다.",
            },
        }
    }
}, function () {
    $('body').i18n();
});

var changeLang = function (lang) {
    $.i18n.setLng(lang);
    $('body').i18n();
    
}



$(document).ready(function(){
    click();
})

function click(){
    $(".koo").click(function(){
        $(".us").addClass("nnnnone")
        $(".kor").removeClass("nnnnone")
        localStorage.setItem("local", "ko-KR");
    })
    $(".enn").click(function(){
        $(".kor").addClass("nnnnone")
        $(".us").removeClass("nnnnone")
        localStorage.setItem("local", "en-US");
    })
}
