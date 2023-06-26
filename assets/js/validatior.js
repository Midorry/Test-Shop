const Validation = function(options) {
    const formElement = document.querySelector(options.form);
    const selectorRules = {};
    if (formElement) {

        // Lấy ra thẻ cha 
        const getParent = function(element, selector) {
            while (element.parentElement) {
                if (element.parentElement.matches(selector)) {
                    return element.parentElement;
                }
                element = element.parentElement;
            }
        }


        // Tạo hàm Validate
        const validate = function(inputElement, rule) {
            

            if (inputElement) {
                const notifyElement = getParent(inputElement, options.parentSelector).querySelector(options.errorSelector);
                const formGroupElement = getParent(inputElement, options.parentSelector);
                var errorMessage;

                // Lặp qua các Rule nếu người dùng nhập sai thì thoát vòng lặp
                const rules = selectorRules[rule.selector];
                for(var i = 0; i < rules.length; i++) {
                    switch(inputElement.type){
                        case 'radio':
                        case 'checkbox':
                            errorMessage = rules[i](formElement.querySelector(rule.selector + ':checked')); 
                            break;
                        default:
                            errorMessage = rules[i](inputElement.value);                        
                    }
                    if(errorMessage) {
                        break;
                    }
                }

                if (errorMessage) {
                    notifyElement.innerText = errorMessage;
                    formGroupElement.classList.add('invalid');
                }
                else {
                    notifyElement.innerText = '';
                    formGroupElement.classList.remove('invalid');
                }
                
                return !errorMessage;
            }
        };

        formElement.onsubmit = function(e) {
            e.preventDefault();
            var isFormValid = true;

            // Lặp qua từng Rule và validate
            options.rules.forEach(function(rule) {
                const inputElement = formElement.querySelector(rule.selector);
                var isValid = validate(inputElement, rule);
                
                if(!isValid) {
                    isFormValid = false;
                }
            });
            if(isFormValid) {

                // Lấy dữ liệu người dùng nhập 
                if (typeof options.onSubmit === 'function') {
                    const enableSubmit = formElement.querySelectorAll('[name]');
                    const formValid = Array.from(enableSubmit).reduce(function(values, input) {

                        switch(input.type){
                            case 'radio':
                                values[input.name] = formElement.querySelector('input[name="' + input.name +'"]:checked').value;
                                break;
                            case 'checkbox':
                                if(!input.matches(':checked')) {
                                    values[input.name] = '';                                    
                                }
                                if(!Array.isArray(values[input.name])) {
                                    values[input.name] = [];
                                }
                                values[input.name].push(input.value);
                                break;
                            case 'file':
                                values[input.name] = input.files;
                                break;
                            default:
                                values[input.name] = input.value;
                        }
                        return values;
                    }, {});
                    options.onSubmit(formValid);

                }
            }
        };

        // Lặp qua các Rule và xử lý các sự kiện
        options.rules.forEach(function(rule) {

            const inputElements = formElement.querySelectorAll(rule.selector);
            // Lưu lại các Rule cho mỗi lần
            if(Array.isArray(selectorRules[rule.selector])) {
                selectorRules[rule.selector].push(rule.test);
            }
            else {
                selectorRules[rule.selector] = [rule.test];
            }
            
            Array.from(inputElements).forEach(function(inputElement) {
                inputElement.onblur = function() {
                    validate(inputElement, rule);
                };
                inputElement.oninput = function() {
                    const notifyElement = getParent(inputElement, options.parentSelector).querySelector(options.errorSelector);
                    const formGroupElement = getParent(inputElement, options.parentSelector);
                    notifyElement.innerText = '';
                    formGroupElement.classList.remove('invalid');
                }
                // if (inputElement) {
                // }
            });


            
        })
    }
};






isRequired = function(selector) {
    return {
        selector: selector,
        test: function(value) {
            return value ? undefined : 'Vui lòng nhập trường này.';
        }
    }
}

isEmail = function(selector) {
    return {
        selector: selector,
        test: function(value) {
            const regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            return regex.test(value) ? undefined : 'Nhập lại email.';
        }
    }
}

minLength = function(selector, min) {
    return {
        selector: selector,
        test: function(value) {
            return value.length >= min ? undefined : `Nhập mật khẩu tối thiểu ${min} ký tự`;
        }
    }
}

isConfirm = function(selector, message) {
    return {
        selector: selector,
        test: function(value) {
            const passValue = document.querySelector('#password').value;
            return value === passValue ? undefined : message || 'Không trùng khớp.';
        }
    }
}