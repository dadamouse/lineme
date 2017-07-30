<?php
namespace Config;

class WEB
{
    const LANGUAGE = 'TW';
    const ROOT_URL = 'https://line.me.ec';
    const ASSET_CSS_URL = 'https://line.me.ec/css';
    const ASSET_JS_URL = 'https://line.me.ec/js';
    const ASSET_IMG_URL = 'https://line.me.ec/images';
    const RELAY_URL = 'https://line.me.ec/t';
}

class SPHINX
{
  const IP = '192.168.3.143';
  const PORT = 9312;
}

class DB
{
  const DBNAME = 'iguang_data';
}

class REDIS
{
  const PREFIX = 'Line:EC';
  const HOST = '192.168.3.94';
  const PORT = 6379;
  const DBNO = 4;
  const TIMEOUT = 3;
  const TTL = 43200;
}

//
// shop ID constant define
//
class IGC
{
  //
  // IGUANG CONST ID
  //
  const SHOP_YAHOO    = 1;  //Yahoo!購物中心
  const SHOP_YAHOOBUY   = 1;  //Yahoo!購物中心 eason
  const SHOP_YAHOOMALL  = 2;  //Yahoo!超級商城
  const SHOP_YAHOOBID = 3;  //Yahoo!拍賣
  const SHOP_PAYEASY  = 4;  //PayEasy
  const SHOP_PCHOME = 5;  //PChome
  const SHOP_RUTEN    = 6;  //露天拍賣
  const SHOP_GOHAPPY  = 9;  //GOHAPPY快樂購物網
  const SHOP_MOMO   = 10; //momo富邦購物網
  const SHOP_IHOUSE = 11; //特力屋
  const SHOP_HOLA   = 12; //特力和樂
  const SHOP_ECLIFE = 13; //良興EcLife購物網
  const SHOP_TAAZE    = 14; //讀冊生活
  const SHOP_FRIDAY = 17; //friDay購物
  const SHOP_RAKUTEN  = 18; //樂天市場
  const SHOP_PCSTORE  = 19; //PChome商店街
  const SHOP_UDN    = 20; //udn買東西
  const SHOP_NEOCITY  = 21; //城市新品味
  const SHOP_YAHOOBID_2 = 22; //Yahoo!拍賣 ?? duplicate w/ 3
  const SHOP_TKEC   = 23; //燦坤快３網路商城
  const SHOP_HERBUY = 24; //HerBuy好買
  const SHOP_ASAP   = 25; //ASAP閃電購物網
  const SHOP_MAYUKI = 26; //東京著衣購物網
  const SHOP_KINGSTONE  = 27; //金石堂
  const SHOP_BOOKS    = 28; //博客來
  const SHOP_7NET   = 29; //7net
  const SHOP_SAVESAFE = 30; //大買家
  const SHOP_TREEMALL = 31; //TreeMall泰贈點
  const SHOP_POSTMALL = 32; //Postmall郵政商城
  const SHOP_HAKKA    = 33; //客家商圈
  const SHOP_APEZGO = 34; //亞柏EZ購
  const SHOP_ISUNFAR  = 35; //愛順發購物網
  const SHOP_FPGSHOPPING  = 36; //台塑購物網
  const SHOP_101T   = 37; //101原創T
  const SHOP_OBDESIGN = 38; //OB嚴選
  const SHOP_SHOPPING99 = 39; //Shopping99
  const SHOP_PURE17GO = 40; //民視消費高手
  const SHOP_RTMART = 41; //大潤發
  const SHOP_MYFONE = 42; //Myfone購物網
  const SHOP_91MAI    = 43; //91mai就要買
  const SHOP_SANJING3C  = 44; //三井3C
  const SHOP_JAPANBUY = 45; //日本代購
  const SHOP_FANDORA  = 46; //Fandora
  const SHOP_NARUKO = 47; //NARUKO
  const SHOP_PCHOME24 = 48; //PCHome24小時購物
  const SHOP_PCHOME24BOOK = 49; //PCHome24小時書店
  const SHOP_ETMALL = 50; //東森購物
  const SHOP_YOUBELI  = 51; //youbeli
  const SHOP_CITE   = 52; //城邦讀書花園網路書店
  const SHOP_EBAY   = 53; //ebay
  const SHOP_EBAY_UK  = 54; //ebay-uk
  const SHOP_EBAY_MY  = 55; //ebay.my
  const SHOP_AGRIII123  = 56; //agriii
  const SHOP_SHOPNEASY  = 57; //shopneasy
  const SHOP_LAZADA = 58; //lazada
  const SHOP_BEAUTY88 = 59; //時尚美人購物商城
  const SHOP_REEBONZ  = 60; //reebonz
  const SHOP_CAMERALAH  = 61; //Cameralah.com
  const SHOP_SAYFASHION = 62; //SAY
  const SHOP_SEQOCI = 63; //SEQOCI
  const SHOP_MRUNCIT  = 64; //MRuncit
  const SHOP_NILE   = 65; //NILE.COM.MY
  const SHOP_SHASHINKI  = 66; //shashinki
  const SHOP_IPMART = 67; //ipmart
  const SHOP_YELP   = 68; //YELP
  const SHOP_ENSOGO = 69; //ensogo
  const SHOP_TAOBAO = 70; //taobao
  const SHOP_AMNIG  = 71; //amnig
  const SHOP_HISHOP = 72; //hishop
  const SHOP_SOUKAI = 73; //soukai
  const SHOP_LELONG = 74; //lelong
  const SHOP_CDISCOUNT  = 75; //cdiscount
  const SHOP_LAZADA_TH  = 76; //lazada_th
  const SHOP_WELOVESHOPPING = 77; //weloveshopping
  const SHOP_COOL3C = 78; //cool3c
  const SHOP_11STREET = 79; //11street
  const SHOP_ZALORA = 80; //zalora
  const SHOP_MOMOMALL = 81; //momomall
  const SHOP_QOO10    = 82; //Qoo10
  const SHOP_IMALL  = 89; //愛逛街
  const SHOP_UMALL    = 90; //umall
  const SHOP_EYESCREAM= 91; //eyescream
  const SHOP_PERSON = 99; //社群
  const SHOP_COMPAREPRICE = 100;  //比價商城
    //
    // apply tag system to showcase
    //
  const SHOP_SHOWCASE = 101;  //愛逛街櫥窗
    //
    // start of article type's shop
    //
  const SHOP_IG_ARTICLE = 102;  //愛逛街文章
  const SHOP_ROODO  = 103;  //樂多部落格
  const SHOP_YWBLOG = 104;  //優仕網部落格
  const SHOP_SHARE  = 105;  //優仕網共產檔
    //
    // end of article type's shop
    //
  const SHOP_0800OK = 120;  //歐克團購網
  const SHOP_17LIFE = 121;  //17Life
  const SHOP_BUY123 = 122;  //生活市集
  const SHOP_CRAZYMIKE  = 123;  //瘋狂賣客
  const SHOP_FISH123  = 124;  //好魚網
  const SHOP_FOOD123  = 125;  //好吃宅配網
  const SHOP_GOMAJI = 126;  //GOMAJI團購網
  const SHOP_GROUPON  = 127;  //GROUPON團購網
  const SHOP_I3FRESH  = 128;  //愛上新鮮
  const SHOP_SHOPPING99GP = 130;  //Shopping99
  const SHOP_DOG123_OFFSHELVES  = 131;  //寵物百貨
  const SHOP_MOMO919  = 132;  //Momo919
  const SHOP_AGRIII = 133;  //agriii團購
  const SHOP_SALE123  = 134;  //大折扣
  const SHOP_FUN123 = 135;  //3C市集
  const SHOP_JACKCOW  = 150;  //Jackcow
  const SHOP_STREETDEAL = 151;  //Streetdeal
  const SHOP_CITEGROUPBUY = 152;  //citegroupbuy
  const SHOP_EGGSHELL     = 208;  //eggshell (毛寶)
  const SHOP_EPAYLESS     = 209;  //epayless (百利市)
  const SHOP_RAKUTENGLOBAL  = 210;  //樂天國際
  const SHOP_LIFE8     = 212;  //life8
  const SHOP_NIKE     = 213;  //NIKE
  const SHOP_BANGENTER     = 214;  //SHOP_BANGENTER
  const SHOP_LOGON     = 215;  //logon(my)
  const SHOP_FEDS     = 216;  //遠百(GOHAPPY)
  const SHOP_SOGO     = 217;  //sogo(GOHAPPY)
  const SHOP_CITYSUPER     = 218;  //citysuper(GOHAPPY)
  const SHOP_AMART     = 219;  //愛買(GOHAPPY)
  const SHOP_GOHAPPYMALL     = 220;  //愛買(GOHAPPY)
  const SHOP_LAZADA_ID     = 221;  //lazada(印尼)
  const SHOP_TEST = 9999; //test
}  // class SHOPID

//
// shop cluster group define
//
class SHOPCLUSTER
{
    public static $shop = [
        'MALL'=> [
            'clusters' => ['product_data_cluster2', 'product_data_cluster3'],
            'exclude'  => [IGC::SHOP_YAHOOMALL, 
                           IGC::SHOP_PCSTORE, 
                           IGC::SHOP_POSTMALL, 
                           IGC::SHOP_MOMOMALL]
        ],

        'STORE' => [
            'clusters' => ['product_data_cluster2', 'product_data_cluster3'],
            'include'  => [IGC::SHOP_YAHOOMALL, 
                           IGC::SHOP_PCSTORE, 
                           IGC::SHOP_POSTMALL, 
                           IGC::SHOP_MOMOMALL]
        ],

        'GROUPBUY' => [
            'clusters' => ['product_data_cluster1']
        ],
        
        'C2C' => [
            'clusters' => ['product_data_cluster4']
        ],
        'AD' => [
            'clusters' => ['product_data_cluster_ad']
        ]
    ];

    public static $all = ['clusters' => ['product_data_cluster1', 
                          'product_data_cluster2', 
                          'product_data_cluster3', 
                          'product_data_cluster_ad']];
    public static $sphinxIndex = ['clusters' => ['product_data_cluster2_th']];
}