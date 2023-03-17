--TEST--
Hash: FNV1a32 algorithm
--FILE--
<?php

$tests = array(
    array( 'l', 'e90c310b' ),
    array( 'b', 'e70c2de5' ),
    array( 'a', 'e40c292c' ),
    array( 'd', 'e10c2473' ),
    array( 'Z', 'df0c214d' ),
    array( '0K', '66eddeec' ),
    array( 'cp', '47297986' ),
    array( 'UY', '6bf399cb' ),
    array( 'RS', '6e04e612' ),
    array( '+`', '47dc64fe' ),
    array( 'Q: ', '1c02a1d6' ),
    array( ' Mu', 'c5c8a3f9' ),
    array( 'jS0', '1819afae' ),
    array( 'cRZ', 'd9f699ae' ),
    array( ' "]', 'ee32d84e' ),
    array( 'Bo@$', '1544a53a' ),
    array( 'U{5"', '08f0b60a' ),
    array( '`&W;', '300ba78d' ),
    array( 'Y+F;', '12d960fe' ),
    array( '\\a<]', '7596c231' ),
    array( '/2HcC', '4ee26872' ),
    array( '-7}-:', '5e0b1ab7' ),
    array( '[O*|T', 'c259a137' ),
    array( '_yib[', '6cc9d49b' ),
    array( 'p:vKE', 'becd7e8f' ),
    array( '>g# $a', 'ae428052' ),
    array( '07*tZ8', 'ed8d23f4' ),
    array( ',YEF5u', 'faf2b057' ),
    array( 'Q3K2.6', '44f076e4' ),
    array( 'ti(0aT', '29d6e513' ),
    array( 'U <Y!A;', 'ebcefc16' ),
    array( '2XF\'4^3', '11bad723' ),
    array( 'm%Z${-8', '2ef77eeb' ),
    array( 'G@F^60g', 'a0044fc5' ),
    array( 'Fq<|rYV', '00fb2e21' ),
    array( 't{r\'U9.i', '0d526094' ),
    array( 'xBX}}]y,', '58e08903' ),
    array( 'uBL<"bMi', '6b4adbd4' ),
    array( '*@\'\'3a^)', 'e9588a44' ),
    array( ']Q03k?|d', '5a837058' ),
    array( 'aVb`4]l* ', '8e9bed4b' ),
    array( '9G#|tl\'6s', '7301283c' ),
    array( '/JUmS4@cG', 'd708df29' ),
    array( '-$Eqf{UG1', '406526e0' ),
    array( '44<5Nd8LZ', '56f2092a' ),
    array( '&Tpyc;PRnd', 'e1b9c4be' ),
    array( 'sS-!WRs>OJ', '9fee418c' ),
    array( 'fa^z}tJc-v', '42d4d075' ),
    array( '>3K/./J_b9', 'd9e15b05' ),
    array( 'EVmRXE&LdV', '1ccbc7ba' ),
    array( 'wK9WG7LqzYi', 'fc482f42' ),
    array( '9m5I|Es\\(."', '43fc2be7' ),
    array( '^{U8B\\d(4\\T', 'af371347' ),
    array( 'M4{eana<X{*', '0073ed9f' ),
    array( 'mE\'39d<Gg{D', '7755ffb9' ),
    array( '=4fzyn/WC\\l@', '3085c332' ),
    array( 'BN0$jh uWE}k', 'c95b95dc' ),
    array( '_b((J$Lh94c3', 'c7f99999' ),
    array( '$rjGPWhr&xwq', '0b9873cd' ),
    array( 'bxg;?e(~H0\'s', 'cee0652d' ),
    array( '5T\\OhAbl4M5e&', '21278985' ),
    array( '~Y-xQ~[JfwiL ', '97dae25b' ),
    array( 'iu1qiGFGv/hZ|', '045498c1' ),
    array( '})2c/1=<*o;f;', 'ce6b0a18' ),
    array( '"_&O_oEqa09(W', '31218352' ),
    array( '18@k5>tG"$Y@@d', 'e67f32fc' ),
    array( '1\\LL_,R/kCU]%e', '563251e6' ),
    array( 'w.=)F]t\\|i% n^', '10a0ae81' ),
    array( 'A0DRlp~L|Q\\it2', '2f5d78ca' ),
    array( 'Gzw@)6IPt?-q*3', '228eab51' ),
    array( 'rxq4*6fw(eE%8"n', '843e8340' ),
    array( '.57).W3D"d9Ar,K', '9cc1aba3' ),
    array( '&~Ex3O0yH8_m=xo', 'c1a72c91' ),
    array( '-\'&D14{EX}*r@}~', 'f0b627fc' ),
    array( 'k$}2}1b.,+Flyde', '2255bec4' ),
    array( 'iqmp6~%3D]2OPRNO', '95cb7153' ),
    array( '?RNRQ`5_lA\'Y;k@&', '98f1390e' ),
    array( '^.vu.{)SZ<#+nQ[/', '2f89dc6c' ),
    array( '%+aVkw7Y9>3U+T\\j', '15c1ec76' ),
    array( 'bS`pPjD+\'H7vzs\'!', 'b732fff0' ),
    array( '~hWkaoE{.YQ:..%qb', 'a53c7189' ),
    array( 'eb3Q(?XQWPLKWMKA&', '3bf2f0e8' ),
    array( '7#u]~%7Q?E_D7C+zW', 'f5038551' ),
    array( '\\$w5UOf#{>PH_W`cN', 'c3b89ba6' ),
    array( '>bSU4rzt839C.p 2h', '00cf8218' ),
    array( '5h9|k6;=^{t?`C]Cv4', '855c27e9' ),
    array( 'Xj0N#CgFRYFeC\\N]Z;', 'caae0fcf' ),
    array( 'suXRrNrTrPwjeQUu!Y', 'e2ac5b6c' ),
    array( ':i lDGSg%#E_>:VwlJ', '0648058a' ),
    array( 'F_~91w$vIZmK4(55tY', '11c2fffb' ),
    array( '\\HBbLhBj#ybpD*PCCb;', 'b32cc782' ),
    array( 'HZe#H27PGLF"*oEl<.0', '86a137c7' ),
    array( '\'1*j"NtSr87/aqtd;\'|', 'f40113e8' ),
    array( 'kOI3RT#wB?&RF8]2;,\'', '0096ffab' ),
    array( 'n @\'/"y$g5,d"\\/5/c9', '8b7ec669' ),
    array( '\'&X.Y F72aD:QDZYS]SX', '26b51c68' ),
    array( 'Eid*lB9#Q}<Y%tg_u/v(', '9ff0e9b3' ),
    array( 'p<BC`}|5[Qm!;S,(uE,H', '50d88cac' ),
    array( 'DH"J>i*4y"<j>_/ ],59', '9354bdac' ),
    array( '^#:yWG#Mm/u2Xx\\vcg+]', '4debf08a' ),
    array( 'iHI)(X)ee> DB;?zbCIPS', '312f5ce8' ),
    array( '@c,9A$|)/[sX%|`]&GDEG', '8793f867' ),
    array( 'ihc)cFL-w!M[-g|1d\'A@z', '57a03ef9' ),
    array( 'yFw[%~#IDK3.0=qVj OkN', 'a435237b' ),
    array( '+x6)+{0M=+Hc$$h#(3HTF', 'f7f3fb17' ),
    array( 'VdcI<OIk;xv5/!A+1nI<7-', 'c0276bde' ),
    array( '@<vDD*lxQC^6mze8g!1_6@', '2a8386fd' ),
    array( '`WLqGu/^$Oz{s@&a:W&xms', 'c5454bef' ),
    array( 'tS,\\U==l^}E+pl" L\'PG#E', '7163befc' ),
    array( 'h)\'#a-|P"q%.OZLmG+kl7\\', '262417f4' ),
    array( 'Z9]\'@.ODT8N[<0i9ak,fz\\B', '30233bfa' ),
    array( 'GJjR6Xis3$R:Eaii6#9q?I\\', 'b1d4e934' ),
    array( 'Y+IerDB5kl ?$X*xk/L\'T.q', '20d3742c' ),
    array( '?DtX75#sn/=U"ax7Nf8nkpx', '61619334' ),
    array( 'd])1d]?W}dLW{b[oRj.)lo"', '366d01d0' ),
    array( '%?h=.T/(:m1LRol*nQWGM;#>', '6ec48f20' ),
    array( 'mmLv[=ya\\b k8/tS|\' Pwl[f', '9fb5d98f' ),
    array( '?4/lO2,>!X5]u/?Sr@@,O5_M', 'b476c549' ),
    array( '=_~5M[|lo,Z?>f]@?s}6$>iw', '621bbc86' ),
    array( '^+$/@c]^C\\sp9p^)|9I<!(\\A', '3ea36c5d' ),
    array( '{[W!yBxXM|hm`FL$$Au=2UF0o', '0f54780f' ),
    array( 'pMpx*2tfjv`-o:Zl#IMIuRN8I', 'c19ab462' ),
    array( 'kK 3[o$)a|4trz_i\\lZvGGzpu', '1cd34af1' ),
    array( 'DgHr r_Krr(cw2EuF:iByS~f.', '0d60d437' ),
    array( 'v/Vq L7gu+hhj5\\^=@WPfMw"7', '9d0ca535' ),
    array( ':{k:cz2sQ$s~<\\tGF^3[<ry]JJ', '92579a4a' ),
    array( 'DwCF0^C|y(w,{J1pJMM?ut~)Q<', 'ed50fb22' ),
    array( '|KyGv>@;eQy)Ns1F -q1}<_L\\U', 'c5960f99' ),
    array( 'B\\_sx\\@r%71FRvwM!FA3lA@_S?', '51be9eb7' ),
    array( '{4lXj05K$.)D".\\3T0+L]-r @`', 'e8525ded' ),
    array( 'Aa@u"=+nvu -A$;JI>X&R.7^[uk', '0510b06f' ),
    array( 'Nu,08nQ.pn9`e0`rQd/{.MU5 cL', '43c2c9c8' ),
    array( '^?BKn8X~QGP_8@yx&*Zy[@)XOV.', '39874c53' ),
    array( 'dWr273Ub"n;"@bS!{szuz&Ptbp~', 'c81fe453' ),
    array( '<@VJ&.>8ERn)U]DW~(, $!{y|"K', 'dc0d68d2' ),
    array( 'qe<p"]GMcVk||>k&sJKLITYIYZET', '90be4d50' ),
    array( 'WH J.=;0zc]_;J\\8hI?]sk+=@dfy', '5e1e1340' ),
    array( '?-OwUOBcm^tiCRI^}\'wfP7ED#PaC', 'f03345c0' ),
    array( '5I>UWmM->pq,Pgus:?S9FK!wbF<e', '94060b65' ),
    array( 'w~*-IHc!72/U$!bThYH$x|=@H>9+', '547a6b68' ),
    array( 'eUq]U{k~EP!]b04f2v;{Qd!Ka?l+^', 'e777322d' ),
    array( '&6D[)#2&n1L?2*#C?iU7&RhkS4Nr!', '4a78ebdf' ),
    array( 'YR\'ovcyyu i\'L*:W-^vw5.}gvj<+9', 'f83d06fa' ),
    array( '0-rb4cZw]Um^?u+J1bWpZO&hNn`:,', '7f314445' ),
    array( 'lS<yG /+Z(i0vHPmTz~8Rpr#w\\Rf>', '831a8450' ),
    array( 'lr+A0&h05sk=^{4\'M#\\H"t{sh kESS', '0c39d6ad' ),
    array( 'cAFobWuKh,@TJ Q_(~bdHeYEYCEEhx', '12b2879c' ),
    array( 'xM;@=}x4JaAk7kkhLsh/Y2t4WOW}uA', '81c3b55c' ),
    array( 'von21-1*B[lcH$P4m|)V-bi#wARO?I', '0d5d6b27' ),
    array( 'p79`JKn[V18Cu`GGu5D lQbVTZx(+8', '0fd3c926' ),
    array( 'Q{Pk]z7LWn^o2UQZ|HpAH]s,5If/QrG', '0f36a996' ),
    array( '$oxoMs(zLvY=*/nd,8UN`4ClJlTY>G"', '80b38386' ),
    array( 'C7z4do<_<4:Y?JI$WaZ\'BoJ0;7dtV,w', '9874d3b3' ),
    array( 'yDr.*cKj `%Z P$%(f`/*PY:kq~aH,Y', 'ab5089b4' ),
    array( 'BQMQ[1|F1]Lk]|pc&WD5buo|ab|D+*}', '5d600f5e' ),
    array( 'N[K 7\\|^n[+[9(L}.%BDg85ezwc?$m>R', '1966e89b' ),
    array( 'JjRaGPA7,LrFU?EcEg).!?t{7X<;F[mp', '908106a1' ),
    array( 'FASnrt& BxGw9l\\_TemV%bR=<oXbKGTr', '824f8688' ),
    array( 'i)a\\~g]Aa%9{qu[G\\J}b.Q JBY.m"c`k', '195cad65' ),
    array( 'lCIk,\'.m-Gj >GH{qF^!x_L;9Z*;?k(,', '36f68af8' ),
    array( '/Qx;Y\'*gOtgn<0j/WI1Q)]lC9w_Xcges:', '885fad78' ),
    array( '^0tf:\\60E%MVp].:n_DMMgfEH?*0%}Kd.', '7f86cff2' ),
    array( '@LI}cZCi)yZg)tVi:%8#k^K,h\\2g(vvIC', '3dd2e16e' ),
    array( '@G\'{jp&eLmoBEY\\Jq_6Q,B:hT#pLy:p;a', '03b92168' ),
    array( 'x8Mj>47,$YQ^6{Qv2##U>l+A]W<xIW[Bo', '7b4dcec0' ),
    array( '*-.>D:C~l"6hS-{W1Qu}]8\\6TU_,2#|<0+', 'b86f1510' ),
    array( '[UF~U3"k|Vyx.+K$*)<f@p= }O#zl4\'HjM', '93a09a8c' ),
    array( 'H@aJ,^!&W02$4<-Q#MCANApR=]fD\'RqPrT', '2d094101' ),
    array( '{~3|&k.8oCU}tXL9y{[kNxJ6=Rh0#[e~[x', '72d5e000' ),
    array( '|ae+zUNPTD*!]%|:pL3<bQnKbr(HqcBnF(', 'f4f08743' ),
    array( 'zA]Jr3n|4M"2gs^{0AM m0ruYeZ{U!$PCbz', 'ef1f608e' ),
    array( '6uj4+87=!,{|=>J=,[1#6v]2L^7}#yx:pdN', '800e955f' ),
    array( '{}f:~r7{0UGNa$_e:WCM$#d"&_{AQ`pN^Wh', 'fa87c111' ),
    array( '^K [\\U$+8)k~CCBqGEWJL7Fnh(_7g7!Fc!"', 'f0d49ddf' ),
    array( '@W\'Kp08oT[3F$Y}N\'6uu ~U8fm9-Q;0qs8>', 'bbc8b16a' ),
    array( 'eHVU|2iD7CCfJY]@Y\\vqCd,Q6Gb);zG!D}WB', 'b4c1dc4c' ),
    array( '1BfIe+01dmR?JI2n.>@Ef#N#~u%Dt\\f\' NPe', '7c98ca04' ),
    array( 'Y`w?NJ_ysqh#1)Hw-w{-m!Qc^9j^g;EB{=bK', '79ccb205' ),
    array( 'gBF\\5/_F9)?G!;Un=\'S{A>[)Y!LV>/#\'QIcg', 'ba719e14' ),
    array( 'YC.rLN;Mjp=(xp%:0`DjbpB! E(Rol:I0I=]', 'ce2a6b64' ),
    array( 'xY,cJIlC;r]KT"77sY9t~BGo/b:@-X}&2*j\\T', '87e2ae2a' ),
    array( 'X!pK_=!bT8V.RL.ts}$W8DdqCk$NVa$0ct\\C2', '380f7299' ),
    array( ']\'gv^uI+%> #CW<h=.,)3[`t_pXTM|g,$O#cF', 'eeb01e49' ),
    array( 'LnKkoO/Hkwez%o.`Q$@C\\upZ]}_.!CTM3!:#P', '9f74a4c3' ),
    array( 'IK=B29G"G(SKIv)?hc}gC,hga7zbQ~4zKR>]k', '4b7036db' ),
    array( 'e`4n5`9-iXvNV^rcGZE_V)1U>-!pL_]2@q"UR;', '2ef7953e' ),
    array( 'b=sYlK9_/`;TAr^SH|aJm.+K@K>C"p^d/S?{~X', '58f87a0f' ),
    array( '\\/:wc\\jC04@q_. jZA7xd9jD}zw>vwwS\'3Lko8', '924bf023' ),
    array( '/ MOr.^rx9503yI~>Hy7gp/_E6rr#c,2cYbWhA', 'd2c773bf' ),
    array( 'Ja[`ro[=nzeh2MZB.!Y"t\\e!oJ[R"DtM\'P.yAi', '59761485' ),
    array( '70d}ywLU:ZVs]LQCMAn*sqOh@V:NQ[9il~hgw5=', '1616e5d5' ),
    array( '2pt\'NAXroybznTJXt"rDTO^>=^(%V=Bi/8q^ZJR', '2b93c8c6' ),
    array( 'JE5E5jpm_r`%G1cfNBnSy-vd=0V{j!N5Gc[\\NMJ', '22863e0e' ),
    array( '/@,4h=xPl<@@7N8{kHRg3T7I{z&YJS%Zt2o^Oi/', 'ce54d2ce' ),
    array( '<&O]=~v9j?lRSAi}>e%w1X}lN0\\-`G=}Mm[klS&', '925e90a6' ),
    array( 'Wsr+G4tFS[KLm%JZTZ8a<_ :.mvyZJ!3>s>f)3-]', 'b47ebcb9' ),
    array( 'oY*]^T830PuL1uf?d^9?);RG0q.9&<vuu"STVlhg', '76d4ed18' ),
    array( '>_5OV|n;[)ZdE.-U <n\'Xf|NhQ$@?m)]M>.$;}?w', '2fb33679' ),
    array( '(z]M*j#+\'r2_Z0/Da3e!"n_O.mTJltBto CzkF&r', '569492ba' ),
    array( ':9SuIb:+v!-xplI~[}JHrm>cna^Z)eND~":IeUT]', 'b9cb09fa' ),
    array( 'WbVHP!H- rVratWPW7+a}Y&|\\AFBw{!O_Ww0YA>Y5', '26b7c332' ),
    array( 'tMvi&HB=S$;.+9jL`.D]/t=gmNB/l{EbI<MOdom9t', '7de5c876' ),
    array( '*G C3L$BqbRf ;UO]d=Z+ %GMU-=CF2Mn3q#`vFRY', '627567d3' ),
    array( 'y:Z6o*sUHO`HT)u*74N]G|MZnQ;exn@r*z*z&}QNN', 'b1579567' ),
    array( '3v#<m.S#]2KZ`\'J3C1,2Q =M*8S)i"W|y[:hinlH"', '948a6c9e' ),
    array( '9#b@Nvc`$v3$4`/L4977q42MO{8>i`@#d$C4z\'t~~(', 'fa5a6693' ),
    array( '$3h4_}Mw6?-Im\\E&z/g<2M@Va<^W<]_@pITQH#J^BW', '5db013f4' ),
    array( '(14N80^ LqNmH0+\'hGeIhWr>*<AT{d,$u@S.Q2/~$]', '57cd1795' ),
    array( 'mMnxUWA;!*stH}2iR.O_3E!fTRycQ}B?K18"iZ=kd1', '08722fa3' ),
    array( '`.0sxb"HC6nD}Cvw\'HvJgC[!EE[c1AtrO&fIiiq- `', 'c89edaa7' ),
    array( 'Q~%Hv-qmWZ23\\WY9;kZ1^+8FT"1G/2)`1.*)<{vsW*(', '702aaaa4' ),
    array( '4aaM}M(0-4HTiJe1Zw;<*JF3fC+Zz5c/wE]vsf("zQV', '197ef095' ),
    array( 'd|=vW63s@];SD^_ Ztcjm*He~/m!+?Xp<vgs-{hMY$"', '1ed13f33' ),
    array( '}cb~>Xb)FmR,laznl:H^V?FKLC4z|9}{|`z<:^F`Lxm', 'c04f1349' ),
    array( ':[h*I#R(ZrO\'?r<;oU:lS{ho6G6vt0e/kN:6Rl>._m5', '48c23cac' ),
    array( ' aQ<R(V?[R(LhPb`EsGU`vovJ]5X>$n?eA[9I3X&faRP', 'a53ac530' ),
    array( '262W+Y.kP}b{[wTz|D:bev{0*U7p7iBJ!T#,.1w_/Z[k', '05d91499' ),
    array( 'S1gPU"4<x1M$gdu N8JPlM]{^U[n18[eIC7 FL<@^iDF', '12db23fd' ),
    array( 'N:G}SqO@@-< cxnt1K[[or[6@wV~b{F17m0j__,!mI!Q', '2b2e3dde' ),
    array( 'BpGT<#0-vkC7dz6Gv\\Y.Kjx+K&-9O.jq 2G<6WJ-DmE*', 'f4c74b67' ),
    array( 'h\\R_:-newhqCn~]>-I1.[XKr1u!UcF`M#3-=@|#9et]Tt', 'bd458351' ),
    array( ';r#d$1A]\\4nR6E6\\&d_:q}Zn"tUwR*lm}oS#!u`^+P1Au', 'f8e9f1d5' ),
    array( 'H}|-^7 ]ro_gEW;PD*N5]Q7S3u^c\' YP~W^^n^<bO{KuS', '8e947b43' ),
    array( 'fFxpu.OGE$[;c?CdytcQSCA2_$b[PX08~)*t8Y=]^yyB9', 'a34f6609' ),
    array( '>(33lef0\'yo,\\L]6\\u6e ,}ZI\\9CW\\]udq)QWpb_jRlH~', 'e9d8fa86' ),
    array( 'J^[@tB@!A{K~5oVqNLW@V*xGlY3@F[@q;|21?S3aO_`eP8', '104537ea' ),
    array( 'X~e0@<;:d)swI;Ti-pg@"(s6iDuK*GcbFIsgf/"K9vCb2x', '7c5f8020' ),
    array( 'M?i5_l=T#(xyT$A9fhb[QJkSu%K:h]46}}L^kj3os-iH1,', 'ab2ee1ee' ),
    array( 'axuETGoA{fFG"0&6G$4sb!_upS#[{5h^.^$c\'t%#[LK]\\Q', '8520630b' ),
    array( 't$U)x8*X/{,3W)H@hW m;\'bA+?mV}K(rP^|Iw("\'$/;\\9d', '5ec32f02' ),
    array( '|"<|oX%Sz0rifq5oeeNb0Fk2NpBiM[OK^lINFN#A^u+FhA7', 'b5b5f4e5' ),
    array( 'N(e18-}K[nmF<Jvg)c1X*`[L@RWg;y~i"e{:rzeOiTv&~mn', '14562c12' ),
    array( ')R!b\\a?)"qai.[ix]OuxCp^rZ4ja3XP=+R h4?r72T"@1k9', '01b11a54' ),
    array( 'n</g_!GS[[>=own-#B.lVM_n`5p!F];5zJ}ZLF.("MFrE6!', '8f9e0173' ),
    array( 'IX/60]v~>,p@RO[hJ\'f%S.4[1a#$\'9%Qr5g#r_#1ktQ>D.(', 'f4e44d2d' ),
    array( 'n5oth}*E/kH4sb:FVO.ZBn]TZR\'yv5"fJq\\4ofZ S#4HfNn>', '51b1ae3d' ),
    array( '}}xAlVvH*}B"4Eh_7Fs(.N(aR=+:lyXkxQ.f)%/3#R57w~v/', '0d3e9950' ),
    array( 'Ek7S;@6m^A)L<a864G|=L,QP^fgVf_f,L~`g?vV~9_KVBdlW', '8c43dabf' ),
    array( '-itYuG*U/r-uSs# rch3[?2t ^KBD8yQ#o,y86OG*\\=]QA^D', '4d86d9cd' ),
    array( '%GXafjWgJ$*o=%B@uN:.ejUoGsMy5,>;Tv|<bT$.X.~u4A7*', '38b099cc' ),
    array( 'pQ9V<oFdct^y"}5Vu3rYhvgB&g8;)PFy"_Q?Ow%3md.pbDHYW', '859042fe' ),
    array( ';3A3{c:c|UmM{gP\\:o,3t@!ZNq=s:vKV+lj\'P&kM[Y{XBL6\\<', '88b478a3' ),
    array( 'Bo2cql2d+& #RW/@B6qH#@%\\<^ ht]&8N9{@\'/%36%6h\\F* \\', '4b1d0513' ),
    array( '{I`<N>Y.>C$|J<Kc8kkHq~^w6GT\\RU:N~{kN:E\\YiaV4}"x7n', 'f1ce1247' ),
    array( 'e_`d>Y{f/Y9dsgdpT3+zpddR<yP?rh.XHo>fI;NXtg>iP#Z%6', '3e4eb24d' ),
    array( 'e \'KeZg_,\'St6-=\'K%QfS+\\;IFkL!qcgrk3XF{9R$lG;yeBFjs', '69476a97' ),
    array( '.? j[I2Hv4:Z{-F0fm, A0mhLhOn0:c>Zc*6.=^%Qy`M(\']nuj', '9097fe8e' ),
    array( 'n7{]!HFP7Vk{uF`!]n>=to7U>?]{.Sg}kc\\l,#>DZ*@QQ"R/qq', 'cbee4ea9' ),
    array( 'Mfbd<!$z}3Oe2;In(UrFyMQ; $=R40Eav(F4)K/(^^mpz8`#mS', 'f19251c8' ),
    array( 'Jh!|%"!CT6SzwK#?_-jo5JO#<J<|N*PysRwyTy=*0q%(=)G}63', '8f27bdfb' ),
    array( 'nK]?Oyikv9vH4k{,eQ&$[6va>5jf3"y#NWB~R-kJGcr[Oog6Am;', '9cb72621' ),
    array( '}%3`DHK+\\N&_|^#|10h[WLO4|?{4ajP_pc@5-lAi<GJ:\'M78^!t', 'e0686fbc' ),
    array( '7NEKLdHaG32($vI:$7[nS$9n+f&DF(9]V^*#DRdlfwtko>&tUbc', 'e4bd2dd7' ),
    array( '*f|xrd 8,(Qi^1sbVGHC.@9y1W &.cj9Kh2>M2VZ:)Dy;9\\r`%6', '5efb3af6' ),
    array( 'oFOiW(j^7NIPy2b9`uo;1y`+6zh)\\n@L5p6mx!L0OvaJ)Dci;T&', '05e74ead' ),
    array( 'LNfXdaAn>0/jF "5y#b+SYl}b2bMM7Sze:SK|u:<&J(MJ*bD.EOb', '17cbb538' ),
    array( ' <abND0|\\dwC Kn|A*:HTCv NZD] t@!1#c`Ht]%YVHY"8WDBrlw', '4eca862a' ),
    array( '6dwd?=B@2cADf%&0zd5U;]/=ugb9[P2q5*WTHzt[_6!G<\'W8klm\'', '296c9ed7' ),
    array( 'J}EAe)ZBYl4nwlDAh9|HP}om&H&q5sy`q@#XI]z$K0rD}7efQc0#', 'bc868018' ),
    array( 'a!pgIwZ^lU@^uC8@"3DND8rCPY*#=:\' <xhepDE]ye=p*U1,iVZ/', '09251477' ),
    array( 'oNRA(\\DFwKF4D/z6S@sN\'1?1gQ=R)xaxG4:Pq_vj+= PMzf";[QCm', 'e8f565aa' ),
    array( 'pTUCr(LkiF4~`eq@\\\\Lz\\|IXdLt@}8.nld2_l_LW&aWfHI(&&U!cS', '40202a4d' ),
    array( 'K<8w2YvJhe8Mxx;YFs_)KGQtPW{&Y`Z%}r}0Mt[6[scUm~/4rn=?7', '9d3dfab7' ),
    array( 'o5gG1n!rI\'p=&!jz]!VRe-@d<TX,rwCb-,+?z-2D4$a;&M6cNm65z', '092e633d' ),
    array( 'Vy8,SD LhcZtnyo|-421vM8Dc{sR3)Ni$fvX,w%t[_iKZYHhnZzf(', 'db49c4e2' ),
    array( '3,l/ @B*n-/U%gb|lWYMA&){Orj+mQ4!]!1^BTi1bxgh`JfN"@|DG&', '0c69cbb2' ),
    array( '@vx+"g]7i<9z{[Pel4^U|? cn#%kGLqgDksGSR^=ow9kSjQA~0v{Pv', '8aafa096' ),
    array( '_?zd,B2~+Vj ~?S]]CVv/+aaL`qD]C<=c7#oZ5oelZflz:KX^"Pn.3', '2da2dfea' ),
    array( 'PZtC Rf<oKSs</),uvf\\cbw/<W2lF@ v{u:{H"88Ml-i{6ur.]OqAH', '6aa6fe03' ),
    array( '"] 4JFTK>PAXMi[e#*S0sPGjCUIsHk=JI=^td4A#eb\\3M8yQBMb7~+', '50438792' ),
    array( '#CaM8*9UUbs5XXIy[/]8B+P=]sjA+jL./.\\G9u|oYp%2JO,&_i?"up?', '5a10e446' ),
    array( 'Td+upvB~&Q\\NkRL[->`?h1Lop7/s- 4ad@XU7zU>M2l9e9trWV3Ag_1', 'b41de8a2' ),
    array( 'Xw@L&@ah&"A\\9<3WjEE$,_y 8P3Y9sjrk,@rM"[S$|1>:Du%j<*v{$v', '3d1d96c3' ),
    array( '4T+nn~Yake"^4$;g)8xGR>>X)Zb Wfwk<#Z+#5mo{oO0tjx}#rEV1c/', '021cf019' ),
    array( ':?r;vZ3cv7?#:Tq+QaZaWE[UHN{ ``0{ #7v]KZUbyX}OJ)!-ccd*?;', 'a52533a0' ),
    array( 'Sn8SOxcLxfcpE0KzsFTqu~{w-`[rj{/>jGr;@Vg:>L+c]W_Q}4Dt4@lA', 'eacea244' ),
    array( '"I5lED,1k~M-V6GtcRYA*9s)N8}bYk%[6;I\\_UnLU<Z,R""7U\\X_vMiE', '8dc7eb87' ),
    array( 'eg)?T/{kKEH+{7XRT3^(6a?k>xK6F6\\-~eLSuI@AnhMk!\'>V:}_P_~<~', '7481744d' ),
    array( 'xh5@~qM}XzRODrq4\\? ^F>6a<u3|uO{n9209%]8^Yk.}_ 3=@3{gR2In', '4da520dc' ),
    array( ')\\l~-hmG{}`"\\y`7eo6FpIc1\\_x/rC~{ k{.UjURi7TF16]w&s>w>"*z', 'c6ec7195' ),
    array( 'b#+VG+SGvOUM:, $CTKUj*Nq~mi=os9SwD+?O_gG0>tJKtOnJ{E6&s(&a', '6976d3a8' ),
    array( 'rCRg\\\'`"2!Qriy#(nNTd~C/ziE"]N(@AKr))zj+.k]!UW$^FR3,QW;MA`', '57543a3a' ),
    array( 'O /X@Q%4[.0F:>2w?hPDGvwZ$J3?wT!HT0!ub&+>4;dOZwGy`w?)o7dsa', '5e4ad807' ),
    array( 'w4ZM5##F%x)+%G@A-o{%8vf06p!NUu1N*k{?o~etxn }7A?D1;JI32ZI#', 'c01f194b' ),
    array( '\\wXR)(]u$|e#cZ|SZzj{;/.WZXjl45op-ID7Q"-U rYcMV7)R#&n35Fmm', '4e92f8a5' ),
    array( '2Z"GJsUt8lF;z|;mV <.8F`;MPNbw<Q*vTRBH)7au]|q[9_29|ARC#mpS<', 'cf4d6b34' ),
    array( 'TKY&VQZ)t$2,e)jczF|[Y7Xzi|~WnRtC~OIU"%_v)r#n{nRw6PTph.lR+k', '7a8a94c5' ),
    array( '+y?!>>PgsSmSJvFNfC=:<TjqES 3\',~2\'>4E\\e.Q9{&crL2YpPs.%_ K4 ', '11032641' ),
    array( '_;-^N4}bZ[Hh-ae3EX`X3R)(`/h`[|a;9nzg$xK^UsHcV.w{gXUz,^$lnm', '9298d67e' ),
    array( 'MKj/f%~bl#\\9b2-+vc:n`"H6}Tu#Aepo1\\ xa~[O#8hfKvrBZ-2</ZS.0I', '0654c0b0' ),
    array( '1Q/"BA^B:ABvpE0Y-[Q ~--1I=l|L|G]OW`qy?44`V,R|<-*w^*wk8)5Vu3', '2f477f17' ),
    array( '#r[aB4B5.bIBD Nv}j$(cb3[OLee$\\x\'PUhsi,)wnR;3Si*QU/Z:rmvB;\\(', 'cf7e00ca' ),
    array( '?9"GiW1^B=g:,:U@n@J@vZ{1Mi(o&exE zljS~Iu<11ILgi;(5\\~oX1=C:.', '2b97bb55' ),
    array( 'I \'n #\\jW[4NxF_BrH-.PBjP2CaPf|_1|f!}j^iC:}q4DRW7zdFL\'1|:U_k', '8923a6db' ),
    array( '=\\KNZ2OY}/CAIA3^ff6~azF.#W,>.l*LIU{%gL^f["(&D<d,${,evRtz+"9', 'aa215ef1' ),
    array( '9nCe9xb>a/}Ij QpEnUQrQ]YI0OE<Q^U@#<Y|~x^.v(xvZj=J@n=rMw<^Gaz', '87741385' ),
    array( 'xAQ:DnsBnl"}c*w[ebx1#hNu7G3unuqh7D#\\3w~"d" I,w&rZ $^iSU!{hwj', 'cccba4fc' ),
    array( '_jTw/XTBPTE5VF_c?eWzf\\YP1/Q-xJxY5MQD&\'gV\\-l4TMxs4Pnz.HL?X}LR', '5d4564df' ),
    array( 'HF,^s]#zdjRBx@VMnOA# 0~/YKN3J{esBrR7QV36BeY;\'0iu_+y`<yovF>*q', '3bec6d86' ),
    array( ':pe]c9t5o(L2n&Nv68lvDgW`bGX)fbz"Sa_8zTNk]z}L"LC8e10*ygk\\0Dfv', 'fef9aa77' ),
);

$i = 0;
$pass = true;
foreach($tests as $test) {
    $result = hash('fnv1a32', $test[0]);
    if ($result != $test[1]) {
        echo "Iteration " . $i . " failed - expected '" . $test[1] . "', got '" . $result . "' for '" . $test[1] . "'\n";
    $pass = false;
    }
    $i++;
}

if($pass) {
    echo "PASS";
}
?>
--EXPECT--
PASS
