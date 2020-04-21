$(document).ready(function() {
    var disease = [];
    var health = [];
    var _token = "{{ csrf_token() }}";
    var drugs = [];

    var all = [];
    var doctors = [];
    var drugs_list = [];
    var types = [];
    var types_drugs = [];
    var blogs = [];
    var type_health = [];
    var drugs_company = [];
    var drug_consumption = [];
    var changing = [];

    let globArr = [];
    let arr1 = $('#drugs_hidden').val();
    if(arr1 != null){
        var nameArr = arr1.split(',');
        for(i=0;i<nameArr.length;i++){
            globArr.push(
                {
                    name: nameArr[i]
                }
            );
        }
    }
    

    let globArr2 = [];
    let arr2 = $('#literal_hidden').val();
    if(arr2 != null){
        var nameArr2 = arr2.split(',');
        for(i=0;i<nameArr2.length;i++){
            globArr2.push(
                {
                    name: nameArr2[i]
                }
            );
        }
    }
    

    let globArr3 = [];
    let arr3 = $('#types_drug_hidden').val();
    if(arr3 != null){
        var nameArr3 = arr3.split(',');
        for(i=0;i<nameArr3.length;i++){
            globArr3.push(
                {
                    name: nameArr3[i]
                }
            );
        }
    }

    let globArr4 = [];
    let arr4 = $('#specialized_docs_hidden').val();
    if(arr4 != null){
        var nameArr4 = arr4.split(',');
        for(i=0;i<nameArr4.length;i++){
            globArr4.push(
                {
                    name: nameArr4[i]
                }
            );
        }
    }

    let globArr5 = [];
    let arr5 = $('#type_health_hidden').val();
    if(arr5 != null){
        var nameArr5 = arr5.split(',');
        for(i=0;i<nameArr5.length;i++){
            globArr5.push(
                {
                    name: nameArr5[i]
                }
            );
        }
    }

    let globArr6 = [];
    let arr6 = $('#prohibited_drugs_hidden').val();
    if(arr6 != null){
        var nameArr6 = arr6.split(',');
        for(i=0;i<nameArr6.length;i++){
            globArr6.push(
                {
                    name: nameArr6[i]
                }
            );
        }
    }

    let globArr7 = [];
    let arr7 = $('#related_drugs_hidden').val();
    if(arr7 != null){
        var nameArr7 = arr7.split(',');
        for(i=0;i<nameArr7.length;i++){
            globArr7.push(
                {
                    name: nameArr7[i]
                }
            );
        }
    }

    let globArr8 = [];
    let arr8 = $('#type_disease_hidden').val();
    if(arr8 != null){
        var nameArr8 = arr8.split(',');
        for(i=0;i<nameArr8.length;i++){
            globArr8.push(
                {
                    name: nameArr8[i]
                }
            );
        }
    }

    let globArr9 = [];
    let arr9 = $('#article_hidden').val();
    if(arr9 != null){
        var nameArr9 = arr9.split(',');
        for(i=0;i<nameArr9.length;i++){
            globArr9.push(
                {
                    name: nameArr9[i]
                }
            );
        }
    }

    let globArr10 = [];
    let arr10 = $('#drugs_company_hidden').val();
    if(arr10 != null){
        var nameArr10 = arr10.split(',');
        for(i=0;i<nameArr10.length;i++){
            globArr10.push(
                {
                    name: nameArr10[i]
                }
            );
        }
    }

    let globArr11 = [];
    let arr11 = $('#drug_consumption_hidden').val();
    if(arr11 != null){
        var nameArr11 = arr11.split(',');
        for(i=0;i<nameArr11.length;i++){
            globArr11.push(
                {
                    name: nameArr11[i]
                }
            );
        }
    }

    $.ajax({ 
        url: "{{ route('getcategories') }}",
        data: {_token : _token},
        type: 'post',
        success: function(response)
        {
            for(i=0;i<response.disease.length;i++){
                disease.push(response.disease[i])
            }

            for(i=0;i<response.drugs.length;i++){
                drugs.push(response.drugs[i])
            }

            for(i=0;i<response.health.length;i++){
                health.push(response.health[i])
            }

            for(i=0;i<response.doctors.length;i++){
                doctors.push(response.doctors[i])
            }

            for(i=0;i<response.drugs_list.length;i++){
                drugs_list.push(response.drugs_list[i])
            }

            for(i=0;i<response.types.length;i++){
                types.push(response.types[i])
            }

            for(i=0;i<response.types_drugs.length;i++){
                types_drugs.push(response.types_drugs[i])
            }

            for(i=0;i<response.all.length;i++){
                all.push(response.all[i])
            }

            for(i=0;i<response.type_health.length;i++){
                type_health.push(response.type_health[i])
            }

            for(i=0;i<response.drugs_company.length;i++){
                drugs_company.push(response.drugs_company[i])
            }

            for(i=0;i<response.drug_consumption.length;i++){
                drug_consumption.push(response.drug_consumption[i])
            }
             
            $("#diseasecategories").tokenInput(
                disease,
                {
                    prePopulate: globArr
                }
            );

            $("#drugscategories").tokenInput(
                drugs,
                {
                    prePopulate: globArr
                }
            );

            $("#healthcategories").tokenInput(
                health,
                {
                    prePopulate: globArr
                }
            );

            $("#specialized_docs").tokenInput(
                doctors,
                {
                    prePopulate: globArr4
                }
            );

            $("#drugs1").tokenInput(
                drugs_list,
                {
                    prePopulate: globArr6
                }
            );

            $("#drugs2").tokenInput(
                drugs_list,
                {
                    prePopulate: globArr7
                }
            );

            $("#type_disease").tokenInput(
                types,
                {
                    prePopulate: globArr8
                }
            );

            $("#types_drugs").tokenInput(
                types_drugs,
                {
                    prePopulate: globArr3
                }

            );

            $("#blogcategories1").tokenInput(
                drugs,
                {
                    prePopulate: globArr9
                }
            );

            $("#blogcategories2").tokenInput(
                disease,
                {
                    prePopulate: globArr9
                }
            );

            $("#blogcategories3").tokenInput(
                health,
                {
                    prePopulate: globArr9
                }
            );

            $("#healthrelatedblogs").tokenInput(
                blogs
            );
            $("#type_health").tokenInput(
                type_health,
                {
                    prePopulate: globArr5
                }
            );
            $("#drugs_company").tokenInput(
                drugs_company,
                {
                    prePopulate: globArr10
                }
            );

            $("#drug_consumption").tokenInput(
                drug_consumption,
                {
                    prePopulate: globArr11
                }
            );
            
            
            $("#literal_group").tokenInput([
                {name:"A"},
                {name:"B"},
                {name:"C"},
                {name:"D"},
                {name:"E"},
                {name:"F"},
                {name:"G"},
                {name:"H"},
                {name:"I"},
                {name:"J"},
                {name:"K"},
                {name:"L"},
                {name:"M"},
                {name:"N"},
                {name:"O"},
                {name:"P"},
                {name:"Q"},
                {name:"R"},
                {name:"S"},
                {name:"T"},
                {name:"U"},
                {name:"V"},
                {name:"W"},
                {name:"X"},
                {name:"Y"},
                {name:"Z"},
                {name:"0"},
                {name:"1"},
                {name:"2"},
                {name:"3"},
                {name:"4"},
                {name:"5"},
                {name:"6"},
                {name:"7"},
                {name:"8"},
                {name:"9"},
            ],
                {
                    prePopulate: globArr2
                }
            
            );
        }
    });


    [].forEach.call(document.getElementsByClassName('tags-input'), function (el) {
let hiddenInput = document.createElement('input'),
    mainInput = document.createElement('input'),
    tags = [];

hiddenInput.setAttribute('type', 'hidden');
hiddenInput.setAttribute('name', 'tags_input');
// el.getAttribute('data-name')

mainInput.setAttribute('type', 'text');
mainInput.setAttribute('placeholder', 'Enter Tags');
mainInput.classList.add('main-input');
mainInput.addEventListener('input', function () {
    let enteredTags = mainInput.value.split(' ');
    if (enteredTags.length > 1) {
        enteredTags.forEach(function (t) {
            let filteredTag = filterTag(t);
            if (filteredTag.length > 0)
                addTag(filteredTag);
        });
        mainInput.value = '';
    }
});

mainInput.addEventListener('keydown', function (e) {
    let keyCode = e.which || e.keyCode;
    if (keyCode === 8 && mainInput.value.length === 0 && tags.length > 0) {
        removeTag(tags.length - 1);
    }
});

el.appendChild(mainInput);
el.appendChild(hiddenInput);

// addTag('hello!');

function addTag (text) {
    let tag = {
        text: text,
        element: document.createElement('span'),
    };

    tag.element.classList.add('tag');
    tag.element.textContent = tag.text;

    let closeBtn = document.createElement('span');
    closeBtn.classList.add('close');
    closeBtn.addEventListener('click', function () {
        removeTag(tags.indexOf(tag));
    });
    tag.element.appendChild(closeBtn);

    tags.push(tag);

    el.insertBefore(tag.element, mainInput);

    refreshTags();
}

function removeTag (index) {
    let tag = tags[index];
    tags.splice(index, 1);
    el.removeChild(tag.element);
    refreshTags();
}

function refreshTags () {
    let tagsList = [];
    tags.forEach(function (t) {
        tagsList.push(t.text);
    });
    hiddenInput.value = tagsList.join(',');
}

function filterTag (tag) {
    return tag.replace(/[^\w -]/g, '').trim().replace(/\W+/g, '-');
}
});

});