import $ from 'jquery';
import {SubmitTicketPage} from "./submit-ticket";

// https://jestjs.io/docs/en/timer-mocks
jest.useFakeTimers();

beforeEach(() => jest.resetModules());

describe('related articles', () => {

    beforeEach(() => {
        // Set up our document body
        document.body.innerHTML = `<input name="subject" id="subject" value="foo" />` +
            `<div id="autoAnswerSuggestions" class="well card hidden d-none" style="margin-top: 1rem" data-is-enabled="1">` +
            `<div class="sp-articles"></div>` +
            `</div>`;

        // Initialise jQuery listeners.
        const page = new SubmitTicketPage({});
        page.init();
    });

    describe(`abort responses`, () => {
        const abortMock = jest.fn();

        beforeEach(() => {
            let dfd = $.Deferred();
            dfd.abort = abortMock;

            jest.spyOn($, `getJSON`).mockImplementation(() => {
                return dfd;
            });
        });

        it(`cancels previous ajax requests`, () => {
            // Emulate someone typing.
            const $input = $('#subject');
            $input.trigger('keyup');
            jest.runAllTimers();

            expect(abortMock).not.toBeCalled();

            // Emulate more characters typed.
            $input.trigger('keyup');

            // Cancel the previous XMLHttpRequest.
            expect(abortMock).toBeCalledTimes(1);
        });
    });

    describe('successful responses', () => {

        let spy;

        beforeEach(() => {
            jest.useFakeTimers({legacyFakeTimers: true})

            // https://stackoverflow.com/a/53405718
            // https://stackoverflow.com/a/42669689
            spy = jest.spyOn($, `getJSON`).mockImplementation((url, data, success) => {
                success({
                    status: 'success',
                    data: [
                        {id: 1, slug: 'foo', title: 'foo', excerpt: 'foo'}
                    ],
                    count: 1
                });
            });
        });

        it('calls $.getJSON with the correct params', () => {
            // Emulate someone typing.
            $('#subject').trigger('keyup');

            // Run the setTimeout function (without waiting).
            jest.runAllTimers();

            expect(spy).toBeCalledWith(
                `modules/support/supportpal/relatedarticles.php`,
                {term: `foo`},
                expect.any(Function)
            );
        });

        it(`shows articles`, () => {
            // Emulate someone typing.
            $('#subject').trigger('keyup');

            // Run the setTimeout function (without waiting).
            jest.runAllTimers();

            // Assert things occurred.
            expect(setTimeout).toHaveBeenCalledTimes(1);
            expect($('#autoAnswerSuggestions .sp-articles').html()).toEqual(
                `<p>` +
                `<a href="knowledgebase.php?id=1-foo" target="_blank">foo</a>` +
                `<div class="text-muted small">foo</div>` +
                `</p>`
            );
        });

        // https://jestjs.io/docs/en/timer-mocks
        it('waits 1 second before firing ajax', () => {
            // Emulate someone typing.
            $('#subject').trigger('keyup');

            expect(setTimeout).toHaveBeenCalledTimes(1);
            expect(setTimeout).toHaveBeenLastCalledWith(expect.any(Function), 1000);
        });

        it(`cancels previous timers`, () => {
            // Emulate someone typing.
            $('#subject').trigger('keyup');

            expect(clearTimeout).toHaveBeenCalledTimes(1);
        });
    });
});
