function disp() {
    let result = confirm('本当に削除しますか？');
    if (result) {
        return true;
    } else {
        return false;
    }

}