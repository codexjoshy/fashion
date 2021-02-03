function generateNo(times) {
    const possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    let result = [];
    for (let o = 0; o < times; o++) {
        result.push(possible.charAt(Math.floor(Math.random() * possible.length)))
    }
    return result;
}


generateIron = () => {
    if (this.state.ironAmount) {
        let rand = this.generateNo(this.state.ironAmount);
        this.setState({ ironTag: [...this.state.ironTag, ...rand] })
    }
}

