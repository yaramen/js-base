const size = 10
const unit = 'MB'
let sizeInByte = size
switch (unit) {
    case 'MB':
        sizeInByte *= 1024
    case 'KB':
        sizeInByte *= 1024
}
console.log(sizeInByte)
