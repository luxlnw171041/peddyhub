@extends('layouts.peddyhub')

@section('content')
        <section class="about_us">
            <div class="container">
                <div class="heading text-center">
                    <p class="wow fadeInUp"><span class="purple"><i class="fas fa-paw"></i> </span><span
                            class="orange"><i class="fas fa-paw"></i> </span><span class="purple"><i
                                class="fas fa-paw"></i> </span></p>
                    <h4 class="wow fadeInDown">ข้อกำหนดและเงื่อนไขการใช้บริการบน <span class="wow pulse" data-wow-delay="1s">เว็บไซต์  PeddyHub.com</span>
                    </h4>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="text">
                            <ul> <br>
                                <li><i class="orange fas fa-paw pr-2"></i> <b> 1.การยอมรับในข้อกำหนดและเงื่อนไขการใช้บริการ Peddyhub.com </b></li>
                                    <li style="font-size: 16px; text-indent:30px;">บริษัท 2บี กรีน จำกัด (“บริษัท”) ให้บริการเว็บไซต์ Peddyhub.com หรือแอปพลิเคชันอื่นใดที่บริษัทให้บริการ หรือแอปพลิเคชันชื่ออื่นที่บริษัทเป็นผู้พัฒนา (“บริการ”) แก่สมาชิก (“ท่าน”) ภายใต้ข้อกำหนดและเงื่อนไขต่างๆ ที่บริษัทสามารถปรับปรุงให้ทันสมัยได้ตลอดเวลาโดยไม่ต้องบอกกล่าว ท่านต้องปฏิบัติตามข้อกำหนดและเงื่อนไขการใช้บริการอย่างเคร่งครัดตลอดเวลา</li><br>
                                <li><i class="orange fas fa-paw pr-2"></i> <b> 2. ข้อกำหนดการสมัครเป็นสมาชิก </b></li>
                                    <li style="font-size: 16px; text-indent:30px;">ในการเปิดบัญชีสมาชิกให้แก่ท่าน ท่านตกลงที่จะให้ข้อมูลที่เป็นจริง ถูกต้อง และล่าสุดเกี่ยวกับตัวของท่านเองในการสมัครสมาชิก คงไว้ซึ่งความถูกต้องและเป็นจริงของข้อมูลของท่าน ในการลงทะเบียนหากท่านได้ให้ข้อมูลดังกล่าวที่ไม่เป็นจริง ไม่ถูกต้อง ไม่ใช่ข้อมูลล่าสุด หรือไม่สมบูรณ์ หรือหากบริษัทมีเหตุผลในการสงสัยว่าข้อมูลดังกล่าวที่ไม่เป็นจริง ไม่ถูกต้อง ไม่ใช่ข้อมูลล่าสุด หรือไม่สมบูรณ์ บริษัทมีสิทธิที่จะระงับหรือยกเลิกบัญชีของท่านโดยไม่ต้องบอกกล่าว และปฏิเสธที่จะให้บริการใดๆ ของบริษัทแก่ท่าน ท่านต้องรับผิดชอบในการรักษาความลับของรหัสผ่านและบัญชีของท่าน และรับผิดชอบในกิจกรรมทั้งหมดที่เกิดขึ้นภายใต้รหัสผ่านหรือบัญชีของท่าน รวมถึงอาจพิจารณาเรียกเก็บค่าใช้จ่ายสำหรับการใช้บริการนี้ไม่ว่ากรณีใด ๆ</li><br>
                                <li><i class="orange fas fa-paw pr-2"></i> <b> 3.นโยบายความเป็นส่วนตัว (Privacy Policy)</b></li>
                                    <li style="font-size: 16px; text-indent:30px;">บริษัทมีนโยบายในการคุ้มครองข้อมูลส่วนบุคคลของผู้ใช้บริการทุกท่านอย่างดีที่สุด อย่างไรก็ตาม เพื่อความปลอดภัยในข้อมูลส่วนบุคคลของท่าน ท่านควรปฏิบัติตามข้อกำหนด และเงื่อนไขการให้บริการอย่างเคร่งครัด ในกรณีที่ข้อมูลส่วนบุคคลดังกล่าว ถูก hack (จารกรรมโดยวิธีการทางอิเล็กทรอนิกส์) หรือสูญหาย เสียหายอันเนื่องจากเหตุสุดวิสัยหรือไม่ว่ากรณีใดๆ ทั้งสิ้น บริษัทขอสงวนสิทธิในการปฏิเสธความรับผิดจากเหตุดังกล่าวทั้งหมด</li><br>
                                    <li style="font-size: 16px; text-indent:30px;">เพื่อให้เป็นไปตามพระราชบัญญัติคุ้มครองข้อมูลส่วนบุคคล พ.ศ. 2562 บริษัทได้มีการปรับปรุงข้อตกลง และเงื่อนไขการให้บริการ โดยเพิ่มเติมสิทธิหน้าที่ของบริษัท และผู้ใช้บริการ ให้เป็นประโยชน์ของผู้ใช้บริการ และ มีความมั่นใจ ปลอดภัย จากการได้รับสิทธิ์คุ้มครองตามพระราชบัญญัติคุ้มครองข้อมูลส่วนบุคคล พ.ศ. 2562 สำหรับ “การเก็บรวบรวม การใช้ และ การเปิดเผย” ข้อมูลส่วนบุคคลของผู้ใช้บริการให้เป็นไปตามกฏหมาย ทั้งนี้ ขอให้ผู้ใช้บริการมั่นใจว่าบริษัทได้ให้ความสำคัญอย่างยิ่งยวดในการปฏิบัติตามพระราชบัญญัติคุ้มครองข้อมูลส่วนบุคคล พ.ศ. 2562</li><br>
                                <li><i class="orange fas fa-paw pr-2"></i> <b> 4.ข้อจำกัดการใช้บริการ</b></li>
                                    <li style="font-size: 16px; text-indent:30px;">เพื่อความปลอดภัยในข้อมูลส่วนบุคคลของท่านและผู้ใช้บริการรายอื่น และเพื่อความเป็นระเบียบเรียบร้อยในการใช้บริการ ท่านต้องไม่กระทำการใดอันเป็นการล่วงละเมิดสิทธิส่วนบุคคลหรือสิทธิอื่นใดของบุคคลอื่น และ/หรือสิทธิในทรัพย์สินทางปัญญาของบริษัทหรือของบุคคลอื่น รวมทั้งต้องไม่กระทำการใดอันขัดต่อข้อตกลงและเงื่อนไขนี้ บริษัทสงวนสิทธิที่จะลบ (delete) ทำให้หยุดชั่วคราวหรือถาวร หรือนำเสนอและตรวจสอบข้อมูลส่วนบุคคลของท่านได้ตลอดเวลาตามความต้องการของกฎหมาย หรือเพื่อปกป้องและป้องกันสิทธิ ทรัพย์สิน หรือผลประโยชน์ของบริษัทและบุคคลภายนอก หรือเพื่อวัตถุประสงค์อื่นใดก็ตาม โดยไม่ต้องบอกกล่าวล่วงหน้า และบริษัทไม่ต้องรับผิดชอบในความเสียหายใดๆ ทั้งสิ้น</li><br>
                                    <li style="font-size: 16px; text-indent:30px;">บริษัทเป็นเพียงผู้ให้บริการระบบและข้อมูล รวมถึงเผยแพร่ข้อมูลเพื่ออำนวยความสะดวกเท่านั้น บริษัทไม่อาจรับรองว่าข้อมูลมีความถูกต้อง สมบูรณ์ และปราศจากข้อบกพร่องใด ๆ โดยบริษัทเป็นเพียงสื่อกลางในการส่งผ่านข้อมูลเท่านั้น และบริษัทไม่มีความเกี่ยวข้องกับการทำธุรกรรมการซื้อขายที่ไม่ผ่านระบบของบริษัททั้งสิ้น</li><br>
                                <li><i class="orange fas fa-paw pr-2"></i> <b> 5.การเปลี่ยนแปลงแก้ไข </b></li>
                                    <li style="font-size: 16px; text-indent:30px;">บริษัทสงวนสิทธิในการพิจารณาแก้ไขเปลี่ยนแปลงข้อตกลงและเงื่อนไขการใช้บริการนี้เมื่อใด และอย่างใดก็ได้ตามความเหมาะสม และให้ถือว่าท่านที่ยังคงใช้บริการต่อไปตกลงยอมรับที่จะปฏิบัติตามระเบียบกฎเกณฑ์และเงื่อนไขที่แก้ไขเปลี่ยนแปลงนั้นโดยปริยาย และบริษัทสงวนสิทธิในการเปลี่ยนแปลง ปรับปรุง แก้ไข และระงับบริการไว้ชั่วคราวหรือถาวรได้ตลอดเวลา โดยไม่ต้องบอกกล่าวให้ทราบ และไม่ต้องรับผิดชอบในความสูญหายหรือเสียหายใดๆ ที่เกิดขึ้นทั้งสิ้น</li><br>
                                <li><i class="orange fas fa-paw pr-2"></i> <b> 6.ข้อจำกัดความรับผิด</b></li>
                                    <li style="font-size: 16px; text-indent:30px;">หากเกิดความสูญหายหรือเสียหายขึ้นเนื่องจากการใช้บริการ บริษัทไม่ต้องรับผิดชอบใดๆ ทั้งสิ้นต่อท่าน และ/หรือบุคคลผู้เสียหายนั้น ท่านต้องรับผิดชอบและรับผลเสียหายที่เกิดขึ้นนั้นแต่เพียงผู้เดียว ทั้งนี้ ท่านตกลงสละสิทธิเรียกร้องให้บริษัทรับผิดในความสูญหายและเสียหายใดๆ ที่เกิดขึ้นจากการใช้บริการนี้ทั้งสิ้น</li><br>
                                    <li style="font-size: 16px; text-indent:30px;">นอกจากนี้ ท่านต้องปกป้องมิให้บริษัท กรรมการ ผู้จัดการ ผู้บริหาร พนักงาน ลูกจ้าง ตัวแทน หรือที่ปรึกษาของบริษัท บริษัทในเครือและพันธมิตรทางธุรกิจ ต้องรับผิดหรือถูกฟ้องร้องจากบุคคลอื่นอันเนื่องมาจากบริการนี้ รวมทั้งจะต้องรับผิดชอบและชดใช้ค่าเสียหายต่างๆ ที่เกิดขึ้นเองทั้งสิ้น</li><br>
                                <li><i class="orange fas fa-paw pr-2"></i> <b> 7.การยกเลิกบริการ </b></li>
                                    <li style="font-size: 16px; text-indent:30px;">บริษัทมีสิทธิยกเลิก หรือระงับการให้บริการไว้ชั่วคราวหรือถาวร และลบข้อมูลเนื้อหาในบริการหรือข้อมูลของผู้ใช้บริการได้ทันที หากผู้ใช้บริการฝ่าฝืนหรือพยายามฝ่าฝืนข้อตกลงหรือเงื่อนไขนี้ข้อหนึ่งข้อใด โดยไม่ต้องแจ้งให้ทราบล่วงหน้า</li><br>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection