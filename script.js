let intervalId;
        function startSignal() {
            const sequenceInputs = [
                { id: 'A', value: parseInt(document.getElementById('seqA').value.trim()) },
                { id: 'B', value: parseInt(document.getElementById('seqB').value.trim()) },
                { id: 'C', value: parseInt(document.getElementById('seqC').value.trim()) },
                { id: 'D', value: parseInt(document.getElementById('seqD').value.trim()) }
            ];

            sequenceInputs.sort((a, b) => a.value - b.value);

            const sequence = sequenceInputs.map(item => item.id);
            const greenInterval = parseInt(document.getElementById('greenInterval').value);
            const yellowInterval = parseInt(document.getElementById('yellowInterval').value);

            runSequence(sequence, greenInterval, yellowInterval);
        }

        function stopSignal() {
            clearInterval(intervalId);
            $('.signal').removeClass('green yellow').addClass('red');
        }

        function runSequence(sequence, greenInterval, yellowInterval) {
            let index = 0;
            intervalId = setInterval(() => {
                $('.signal').removeClass('green yellow').addClass('red');
                const current = sequence[index];
                $(`#${current}`).removeClass('red').addClass('green');
                setTimeout(() => {
                    $(`#${current}`).removeClass('green').addClass('yellow');
                }, greenInterval * 1000);
                index = (index + 1) % sequence.length;
            }, (greenInterval + yellowInterval) * 1000);
        }