@extends('layouts.ypr')

@section('content')
    <!--************************************
				breadcrumbarea start
    *************************************-->
    <div class="jf-breadcrumbarea">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ol class="jf-breadcrumb">
                        <li><a href="index-2.html">Home</a></li>
                        <li>Health</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <main id="jf-main" class="jf-main jf-haslayout">
        <div class="jf-sectionspace jf-haslayout">
            <!-- <div class="jf-successstorysbanner">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <form class="jf-formtheme jf-formbannersearch jf-formbannersearchinner">
                                <fieldset class="jf-searcharea">
                                    <div class="jf-searchholder">
                                        <label><em class="lnr lnr-apartment"></em><span>Job Title, Skills or Company</span></label>
                                        <div class="form-group jf-inputwithicon">
                                            <input type="search" name="search" class="form-control" placeholder="Senior creative design">
                                        </div>
                                    </div>
                                    <div class="jf-searchholder">
                                        <label><em class="lnr lnr-map-marker"></em><span>Select City</span></label>
                                        <span class="jf-select">
                                            <select data-placeholder="All" class="chosen-select locations" name="locations">
                                                <option value="">Washington, D.C</option>
                                                <option value="aberdeen">Aberdeen</option>
                                                <option value="aldershot">Aldershot</option>
                                                <option value="altrincham">Altrincham</option>
                                                <option value="aylesbury">Aylesbury</option>
                                                <option value="bamber">Bamber</option>
                                                <option value="bangor">Bangor</option>
                                                <option value="batley">Batley</option>
                                                <option value="bebingto">Bebingto</option>
                                                <option value="bedford">Bedford</option>
                                                <option value="birmingham">Birmingham</option>
                                                <option value="blackpool">Blackpool</option>
                                                <option value="brentwood">Brentwood</option>
                                                <option value="bristol">Bristol</option>
                                                <option value="cardiff">Cardiff</option>
                                                <option value="carlisle">Carlisle</option>
                                                <option value="crawley">Crawley</option>
                                                <option value="darlington">Darlington</option>
                                                <option value="eastleigh">Eastleigh</option>
                                                <option value="edinburg">Edinburg</option>
                                                <option value="esher">Esher</option>
                                                <option value="glasgow-sco">Glasgow SCO</option>
                                                <option value="guildford">Guildford</option>
                                                <option value="halesowen">Halesowen</option>
                                                <option value="halifax">Halifax</option>
                                                <option value="hamilton">Hamilton</option>
                                                <option value="leeds">Leeds</option>
                                                <option value="leicester">Leicester</option>
                                                <option value="liverpool">Liverpool</option>
                                                <option value="london">London</option>
                                                <option value="louisville">Louisville</option>
                                                <option value="manchester">Manchester</option>
                                                <option value="sheffield">Sheffield</option>
                                            </select>
                                        </span>
                                    </div>
                                    <div class="jf-searchbtn">
                                        <a href="javascript:void(0)" class="jf-btn"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>   
                </div>
            </div> -->
            <!--************************************
                    Search Area end
            *************************************-->
            <!--************************************
                    Blog Grid Start
            *************************************-->
            <div class="jf-haslayout">
                <div class="container">
                    <div class="row">
                        <div id="jf-threecolumns">
                            <!-- <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-3 float-left">
                                <aside id="jf-sidebar" class="jf-sidebar jf-sidebarcol">
                                    <div id="jf-narrowsearchcollapse" class="jf-themecollapse jf-narrowsearchcollapse">
                                        <div class="jf-widget jf-themecollapsetitle">
                                            <div class="jf-widgettitle">
                                                <h3>Latest Candidates</h3>
                                                <span class="fa fa-chevron-right"></span>
                                            </div>
                                        </div>
                                        <div class="jf-widget jf-themecollapsecontent">
                                            <div class="jf-checkboxgroup">
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-salesexecutive" name="bycondition" value="Sales Executive">
                                                    <label for="jf-salesexecutive">
                                                        <span>Yesterday</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-graphicdesigner" name="bycondition" value="Graphic Designer" checked="">
                                                    <label for="jf-graphicdesigner">
                                                        <span>Last 3 Days</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-marketingexecutive" name="bycondition" value="Marketing Executive">
                                                    <label for="jf-marketingexecutive">
                                                        <span>Last 5 Days</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-accountant" name="bycondition" value="Accountant">
                                                    <label for="jf-accountant">
                                                        <span>Last 1 Week</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-salesmarketingexecutive" name="bycondition" value="Sales / Marketing Executive">
                                                    <label for="jf-salesmarketingexecutive">
                                                        <span>Last 2 Weeks</span>
                                                    </label>
                                                </span>
                                                <a href="javascript:void(0);" class="jf-viewmore">View More</a>
                                            </div>
                                        </div>
                                        <div class="jf-widget jf-themecollapsetitle">
                                            <div class="jf-widgettitle">
                                                <h3>Find Nearby</h3>
                                                <span class="fa fa-chevron-right"></span>
                                            </div>
                                        </div>
                                        <div class="jf-widget jf-themecollapsecontent">
                                            <div class="jf-checkboxgroup">
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-armagh" name="bycondition" value="Armagh">
                                                    <label for="jf-armagh">
                                                        <span>Armagh</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-bangor" name="bycondition" value="bangor" checked="">
                                                    <label for="jf-bangor">
                                                        <span>Bangor</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-bath" name="bycondition" value="Bath">
                                                    <label for="jf-bath">
                                                        <span>Bath</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-belfast" name="bycondition" value="belfast">
                                                    <label for="jf-belfast">
                                                        <span>Belfast</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-cambridge" name="bycondition" value="cambridge">
                                                    <label for="jf-cambridge">
                                                        <span>Cambridge</span>
                                                    </label>
                                                </span>
                                                <a href="javascript:void(0);" class="jf-viewmore">View More</a>
                                            </div>
                                        </div>
                                        <div class="jf-widget jf-themecollapsetitle">
                                            <div class="jf-widgettitle">
                                                <h3>Education</h3>
                                                <span class="fa fa-chevron-right"></span>
                                            </div>
                                        </div>
                                        <div class="jf-widget jf-themecollapsecontent">
                                            <div class="jf-checkboxgroup">
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-fresh" name="bycondition" value="fresh">
                                                    <label for="jf-fresh">
                                                        <span>Bachelors</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-lessthan" name="bycondition" value="lessthan" checked="">
                                                    <label for="jf-lessthan">
                                                        <span>Intermediate/A-Level</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-1year" name="bycondition" value="1year">
                                                    <label for="jf-1year">
                                                        <span>Masters</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-2years" name="bycondition" value="2years">
                                                    <label for="jf-2years">
                                                        <span>Matriculation/O-Level</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-3years" name="bycondition" value="3years">
                                                    <label for="jf-3years">
                                                        <span>Diploma</span>
                                                    </label>
                                                </span>
                                                <a href="javascript:void(0);" class="jf-viewmore">View More</a>
                                            </div>
                                        </div>
                                        <div class="jf-widget jf-themecollapsetitle">
                                            <div class="jf-widgettitle">
                                                <h3>Experience</h3>
                                                <span class="fa fa-chevron-right"></span>
                                            </div>
                                        </div>
                                        <div class="jf-widget jf-themecollapsecontent">
                                            <div class="jf-checkboxgroup">
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-internship" name="bycondition" value="internship" checked="">
                                                    <label for="jf-internship">
                                                        <span>0 - 2 Years</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-contract" name="bycondition" value="contract">
                                                    <label for="jf-contract">
                                                        <span>3 - 5 Years</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-parttime" name="bycondition" value="parttime">
                                                    <label for="jf-parttime">
                                                        <span>6 - 7 Years</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-freelance" name="bycondition" value="freelance">
                                                    <label for="jf-freelance">
                                                        <span>8 - 10 Years</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-fulltimepermanent" name="bycondition" value="fulltimepermanent">
                                                    <label for="jf-fulltimepermanent">
                                                        <span>11 - 15 Years</span>
                                                    </label>
                                                </span>
                                                <a href="javascript:void(0);" class="jf-viewmore">View More</a>
                                            </div>
                                        </div>
                                        <div class="jf-widget jf-themecollapsetitle">
                                            <div class="jf-widgettitle">
                                                <h3>Age</h3>
                                                <span class="fa fa-chevron-right"></span>
                                            </div>
                                        </div>
                                        <div class="jf-widget jf-themecollapsecontent">
                                            <div class="jf-checkboxgroup">
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-communicationskills" name="bycondition" value="communicationskills">
                                                    <label for="jf-communicationskills">
                                                        <span>18 - 22 Years</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-englishfluency" name="bycondition" value="englishfluency" checked="">
                                                    <label for="jf-englishfluency">
                                                        <span>23 - 27 Years</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-php" name="bycondition" value="php">
                                                    <label for="jf-php">
                                                        <span>28 - 32 Years</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-adobephotoshop" name="bycondition" value="adobephotoshop">
                                                    <label for="jf-adobephotoshop">
                                                        <span>33 - 37 Years</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-Javascript" name="bycondition" value="Javascript">
                                                    <label for="jf-Javascript">
                                                        <span>38 - 42 Years</span>
                                                    </label>
                                                </span>
                                                <a href="javascript:void(0);" class="jf-viewmore">View More</a>
                                            </div>
                                        </div>
                                        <div class="jf-widget jf-themecollapsetitle">
                                            <div class="jf-widgettitle">
                                                <h3>Company</h3>
                                                <span class="fa fa-chevron-right"></span>
                                            </div>
                                        </div>
                                        <div class="jf-widget jf-themecollapsecontent">
                                            <div class="jf-checkboxgroup">
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-entrylevel" name="bycondition" value="entrylevel" checked="">
                                                    <label for="jf-entrylevel">
                                                        <span>Angry Creative Bears</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-internstudent" name="bycondition" value="internstudent">
                                                    <label for="jf-internstudent">
                                                        <span>Aviato Group of Company</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-departmenthead" name="bycondition" value="Department Head">
                                                    <label for="jf-departmenthead">
                                                        <span>Ember Spa &amp; Saloon</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-experiencedprofessional" name="bycondition" value="Experienced Professional">
                                                    <label for="jf-experiencedprofessional">
                                                        <span>Fast Run Cargo &amp; Movers</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-countryhead" name="bycondition" value="GM / CEO / Country Head">
                                                    <label for="jf-countryhead">
                                                        <span>VAV of Oceans</span>
                                                    </label>
                                                </span>
                                                <a href="javascript:void(0);" class="jf-viewmore">View More</a>
                                            </div>
                                        </div>
                                        <div class="jf-widget jf-themecollapsetitle">
                                            <div class="jf-widgettitle">
                                                <h3>Current Salary</h3>
                                                <span class="fa fa-chevron-right"></span>
                                            </div>
                                        </div>
                                        <div class="jf-widget jf-themecollapsecontent">
                                            <div class="jf-checkboxgroup">
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-informationtechnology" name="bycondition" value="informationtechnology" checked="">
                                                    <label for="jf-informationtechnology">
                                                        <span>$500 - $1000</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-services" name="bycondition" value="services">
                                                    <label for="jf-services">
                                                        <span>$1000 - $2000</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-educationtraining" name="bycondition" value="educationtraining">
                                                    <label for="jf-educationtraining">
                                                        <span>$2000 - $3000</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-manufacturing" name="bycondition" value="Manufacturing">
                                                    <label for="jf-manufacturing">
                                                        <span>$4000 - $5000</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-callcenter" name="bycondition" value="callcenter">
                                                    <label for="jf-callcenter">
                                                        <span>$5000 - $6000</span>
                                                    </label>
                                                </span>
                                                <a href="javascript:void(0);" class="jf-viewmore">View More</a>
                                            </div>
                                        </div>
                                        <div class="jf-widget jf-themecollapsetitle">
                                            <div class="jf-widgettitle">
                                                <h3>Expected Salary</h3>
                                                <span class="fa fa-chevron-right"></span>
                                            </div>
                                        </div>
                                        <div class="jf-widget jf-themecollapsecontent">
                                            <div class="jf-checkboxgroup">
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-businessdevelopment" name="bycondition" value="businessdevelopment" checked="">
                                                    <label for="jf-businessdevelopment">
                                                        <span>$500 - $1000</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-accountsfinance" name="bycondition" value="accountsfinance">
                                                    <label for="jf-accountsfinance">
                                                        <span>$1000 - $2000</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-marketing" name="bycondition" value="marketing">
                                                    <label for="jf-marketing">
                                                        <span>$2000 - $3000</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-creativedesign" name="bycondition" value="creativedesign">
                                                    <label for="jf-creativedesign">
                                                        <span>$4000 - $5000</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-telemarketing" name="bycondition" value="telemarketing">
                                                    <label for="jf-telemarketing">
                                                        <span>$5000 - $6000</span>
                                                    </label>
                                                </span>
                                                <a href="javascript:void(0);" class="jf-viewmore">View More</a>
                                            </div>
                                        </div>
                                        <div class="jf-widget jf-themecollapsetitle">
                                            <div class="jf-widgettitle">
                                                <h3>Gender</h3>
                                                <span class="fa fa-chevron-right"></span>
                                            </div>
                                        </div>
                                        <div class="jf-widget jf-themecollapsecontent">
                                            <div class="jf-checkboxgroup">
                                            </div>
                                        </div>
                                        <div class="jf-widget jf-themecollapsetitle">
                                            <div class="jf-widgettitle">
                                                <h3>Career Level</h3>
                                                <span class="fa fa-chevron-right"></span>
                                            </div>
                                        </div>
                                        <div class="jf-widget jf-themecollapsecontent">
                                            <div class="jf-checkboxgroup">
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-angrycreativebears" name="bycondition" value="angrycreativebears" checked="">
                                                    <label for="jf-angrycreativebears">
                                                        <span>Experienced Professional</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-aviatogroup" name="bycondition" value="aviatogroup">
                                                    <label for="jf-aviatogroup">
                                                        <span>Entry Level</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-emberspa" name="bycondition" value="emberspa">
                                                    <label for="jf-emberspa">
                                                        <span>Intern/Student</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-fastruncargo" name="bycondition" value="fastruncargo">
                                                    <label for="jf-fastruncargo">
                                                        <span>Department Head</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-vavofoceans" name="bycondition" value="vavofoceans">
                                                    <label for="jf-vavofoceans">
                                                        <span>GM / CEO / Country Head</span>
                                                    </label>
                                                </span>
                                                <a href="javascript:void(0);" class="jf-viewmore">View More</a>
                                            </div>
                                        </div>
                                        <div class="jf-widget jf-themecollapsetitle">
                                            <div class="jf-widgettitle">
                                                <h3>Language</h3>
                                                <span class="fa fa-chevron-right"></span>
                                            </div>
                                        </div>
                                        <div class="jf-widget jf-themecollapsecontent">
                                            <div class="jf-checkboxgroup">
                                            </div>
                                        </div>
                                        <div class="jf-widget jf-themecollapsetitle">
                                            <div class="jf-widgettitle">
                                                <h3>Marital Status</h3>
                                                <span class="fa fa-chevron-right"></span>
                                            </div>
                                        </div>
                                        <div class="jf-widget jf-themecollapsecontent">
                                            <div class="jf-checkboxgroup">
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-single" name="bycondition" value="angrycreativebears" checked="">
                                                    <label for="jf-single">
                                                        <span>Single</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-married" name="bycondition" value="aviatogroup">
                                                    <label for="jf-married">
                                                        <span>Married</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-divorced" name="bycondition" value="emberspa">
                                                    <label for="jf-divorced">
                                                        <span>Divorced</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-widow" name="bycondition" value="fastruncargo">
                                                    <label for="jf-widow">
                                                        <span>Widow/er</span>
                                                    </label>
                                                </span>
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-separated" name="bycondition" value="separated">
                                                    <label for="jf-separated">
                                                        <span>Separated</span>
                                                    </label>
                                                </span>
                                                <a href="javascript:void(0);" class="jf-viewmore">View More</a>
                                            </div>
                                        </div>
                                        <div class="jf-widget jf-Jobssearch">
                                            <div class="jf-Jobssearchbtn">
                                                <a href="javascript:void(0);" class="jf-btn jf-active">Search Jobs Now</a>
                                                <a href="javascript:void(0);" class="jf-btnreset">Reset Search</a>
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                            </div> -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="jf-candidatessearchsvtwo">
                                    @forelse($values as $value)
                                    <div class="jf-candidatessearcgrid jf-verticaltop">
                                        <div class="jf-candidatessearch">
                                            <figure class="jf-candidatescover">)
                                                <img src="{{ asset($value->image) }}" alt="img-description">	
                                            </figure>
                                            <figure>
                                                <img src="{{ asset('assets/images/successstory/grid/img-01.png') }}" alt="image description">
                                            </figure>
                                            <div class="jf-employerdetails">
                                                <h3>{{$value->title}}</h3>
                                                <h4><span>{{ str_limit($value->description, 40) }}</span></h4>
                                                <h4>
                                                    <span>Posted On</span>
                                                    <span>{{ \Carbon\Carbon::parse($value->created_at)->format('M d, Y') }}</span>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    @empty
                                        <div class="text-center" style="padding-top:100px;padding-bottom:100px;">
                                            <img src="{{ asset('assets/images/no-record.png')}}" alt="image description">
                                            <p>No Data Found</p>
                                        </div>	
                                    @endforelse
                                    <nav class="jf-pagination">
                                        {{ $values->links() }}
                                    </nav>
                                </div>
                            </div>
                            <!-- <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 float-left">
                                <aside id="jf-sidebarvtwo" class="jf-sidebar jf-sidebarvtwo">
                                    <div class="jf-widget jf-myrecentrearches">
                                        <div class="jf-widgettitle">
                                            <h3>My Recent Searches</h3>
                                        </div>
                                        <ul class="jf-recentsearches">
                                            <li><a href="javascript:void(0);">php developer</a></li>
                                            <li><a href="javascript:void(0);">sale associate</a></li>
                                            <li><a href="javascript:void(0);">Graphic Designer</a></li>
                                            <li><a href="javascript:void(0);">Graphic Designer</a></li>
                                            <li><a href="javascript:void(0);">Graphic Designer</a></li>
                                            <li><a href="javascript:void(0);" class="jf-clearsearches"><span class="lnr lnr-cross"></span>Clear Searches</a></li>
                                        </ul>
                                    </div>
                                    <div class="jf-widget jf-employerweek">
                                        <div class="jf-widgettitle">
                                            <h3>Employer Of The Week</h3>
                                        </div>
                                        <div class="jf-angrycreative">
                                            <span class="fab fa-angrycreative"></span>
                                        </div>
                                        <div class="jf-employerdetails">
                                            <h3>Angry Creative Bears</h3>
                                            <h4><span>Member Since: Jun 27, 2010</span><span><i class="lnr lnr-eye"></i>1,744,588 views</span></h4>
                                            <ul class="jf-employerjobs">
                                                <li><a href="javascript:void(0);">Open Jobs</a></li>
                                                <li><a href="javascript:void(0);">Reviews</a></li>
                                                <li><a href="javascript:void(0);">Q &amp; A</a></li>
                                            </ul>
                                            <a href="javascript:void(0);" class="jf-btn">View Full Profile</a>
                                        </div>
                                    </div>
                                    <div class="jf-adds jf-jobsearchadd">
                                        <a href="javascript:void(0);" title="">
                                            <figure>	
                                                <img src="images/adds-02.jpg" alt="img description">
                                            </figure>
                                        </a>
                                        <span>Advertisement  540px X 80px</span>
                                    </div>
                                </aside>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!--************************************
                    Blog Grid End
            *************************************-->
        </div>
    </main>
    <!--************************************
            Main End
    *************************************-->
@endsection