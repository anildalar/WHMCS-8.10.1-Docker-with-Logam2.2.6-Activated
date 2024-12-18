import {Page} from "./page";

describe(`page`, () => {
    it(`uses default when param is null`,   () => {
        const page = new Page({
            lang: null,
            settings: null
        });

        expect(page.lang(`tickets_submitted`)).toBe(``);
        expect(page.lang(`allowed_files`)).toBe(``);
    });

    it(`get language variable`,   () => {
        const page = new Page({
            lang: {"tickets_submitted":`Ticket Submitted`,},
            settings: {"allowed_files":`doc|docx|png|gif|jpg|jpeg|zip|pdf|txt`}
        });

        expect(page.lang(`tickets_submitted`)).toBe(`Ticket Submitted`);
    });

    it(`returns default when language variable does not exist`,   () => {
        const page = new Page({
            lang: {"tickets_submitted":`Ticket Submitted`,},
            settings: {"allowed_files":`doc|docx|png|gif|jpg|jpeg|zip|pdf|txt`}
        });

        expect(page.lang(`tickets`, null)).toBe(null);
    });

    it(`get setting`,   () => {
        const page = new Page({
            lang: {"tickets_submitted":`Ticket Submitted`,},
            settings: {"allowed_files":`doc|docx|png|gif|jpg|jpeg|zip|pdf|txt`}
        });

        expect(page.setting(`allowed_files`)).toBe(`doc|docx|png|gif|jpg|jpeg|zip|pdf|txt`);
    });

    it(`returns default when setting does not exist`,   () => {
        const page = new Page({
            lang: {"tickets_submitted":`Ticket Submitted`,},
            settings: {"allowed_files":`doc|docx|png|gif|jpg|jpeg|zip|pdf|txt`}
        });

        expect(page.setting(`tickets`, null)).toBe(null);
    });
});
