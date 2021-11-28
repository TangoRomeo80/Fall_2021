function testName(name) {
  if (name.length < 5) return false
  else {
    return name.match('^[a-zA-Z]+$')
  }
}

function testMail(mail) {
  return mail.includes('@')
}

function testPass(passWord) {
  return passWord.length > 7
}

function validate() {
  let reqErr = []
  let valErr = []

  let firstName = document.forms['myForm']['first_name'].value
  let lastName = document.forms['myForm']['last_name'].value
  let age = document.forms['myForm']['age'].value
  let designation = document.forms['myForm']['age'].value
  let language = document.forms['myForm']['language'].value
  let email = document.forms['myForm']['email'].value
  let password = document.forms['myForm']['language'].value

  if (firstName === '') reqErr.push('First Name is required')
  else {
    if (!testName(firstName))
      valErr.push('name should be alphabet and more than 5 characters')
  }
  if (lastName === '') reqErr.push('Name is required')
  else {
    if (!testName(lastName))
      valErr.push('Name should be alphabet and more than 5 characters')
  }
  if (age === '') reqErr.push('Age is required')
  if (designation === '') reqErr.push('Designation is required')
  if (language === '') reqErr.push('Language is required')
  if (email === '') reqErr.push('Email is required')
  else {
    if (!testMail(email)) valErr.push('email should have @ in it')
  }
  if (password === '') reqErr.push('Password is required')
  else {
    if (!testMail(email))
      valErr.push('password should be more than 8 characters')
  }

  if (reqErr.length === 0 && valErr.length === 0) {
    let list = document.createElement('ul')
    let listItem = document.createElement('li')
    listItem.appendChild(document.createTextNode(firstName))
    list.appendChild(listItem)
    listItem = document.createElement('li')
    listItem.appendChild(document.createTextNode(lastName))
    list.appendChild(listItem)
    listItem = document.createElement('li')
    listItem.appendChild(document.createTextNode(age))
    list.appendChild(listItem)
    listItem = document.createElement('li')
    listItem.appendChild(document.createTextNode(designation))
    list.appendChild(listItem)
    listItem = document.createElement('li')
    listItem.appendChild(document.createTextNode(language))
    list.appendChild(listItem)
    listItem = document.createElement('li')
    listItem.appendChild(document.createTextNode(email))
    list.appendChild(listItem)
    listItem = document.createElement('li')
    listItem.appendChild(document.createTextNode(password))
    list.appendChild(listItem)
    document.getElementById('success').appendChild(list)
    return true
  } else {
    let list = document.createElement('ul')
    for (let i = 0; i < reqErr.length; i++) {
      let listItem = document.createElement('li')
      listItem.appendChild(document.createTextNode(reqErr[i]))
      list.appendChild(listItem)
    }
    document.getElementById('success').appendChild(list)
    let listVal = document.createElement('ul')
    for (let i = 0; i < reqErr.length; i++) {
      let listItem = document.createElement('li')
      listItem.appendChild(document.createTextNode(reqErr[i]))
      listVal.appendChild(listItem)
    }
    document.getElementById('success').appendChild(listVal)
  }
  return false
}
