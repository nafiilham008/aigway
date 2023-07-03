{{-- <td class=" px-4 py-2"> --}}
<div class="flex gap-2">
    <a href="#" wire:click="detailProduct({{ $selectedProduct->id }})" class="bg-[#E8FBE8] px-2 py-2 rounded-lg hover:bg-[#BA2B60]/20">
        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_321_2714)">
                <path
                    d="M5.28125 5.2249C5.14118 5.2249 5.00685 5.28054 4.90781 5.37959C4.80877 5.47863 4.75312 5.61296 4.75312 5.75303C4.75312 5.89309 4.80877 6.02743 4.90781 6.12647C5.00685 6.22551 5.14118 6.28115 5.28125 6.28115V5.2249ZM7.39375 6.28115C7.53382 6.28115 7.66815 6.22551 7.76719 6.12647C7.86623 6.02743 7.92188 5.89309 7.92188 5.75303C7.92188 5.61296 7.86623 5.47863 7.76719 5.37959C7.66815 5.28054 7.53382 5.2249 7.39375 5.2249V6.28115ZM5.28125 8.92178C5.14118 8.92178 5.00685 8.97742 4.90781 9.07646C4.80877 9.1755 4.75312 9.30983 4.75312 9.4499C4.75312 9.58997 4.80877 9.7243 4.90781 9.82334C5.00685 9.92239 5.14118 9.97803 5.28125 9.97803V8.92178ZM11.6187 9.97803C11.7588 9.97803 11.8931 9.92239 11.9922 9.82334C12.0912 9.7243 12.1469 9.58997 12.1469 9.4499C12.1469 9.30983 12.0912 9.1755 11.9922 9.07646C11.8931 8.97742 11.7588 8.92178 11.6187 8.92178V9.97803ZM5.28125 11.0343C5.14118 11.0343 5.00685 11.0899 4.90781 11.189C4.80877 11.288 4.75312 11.4223 4.75312 11.5624C4.75312 11.7025 4.80877 11.8368 4.90781 11.9358C5.00685 12.0349 5.14118 12.0905 5.28125 12.0905V11.0343ZM11.6187 12.0905C11.7588 12.0905 11.8931 12.0349 11.9922 11.9358C12.0912 11.8368 12.1469 11.7025 12.1469 11.5624C12.1469 11.4223 12.0912 11.288 11.9922 11.189C11.8931 11.0899 11.7588 11.0343 11.6187 11.0343V12.0905ZM5.28125 13.1468C5.14118 13.1468 5.00685 13.2024 4.90781 13.3015C4.80877 13.4005 4.75312 13.5348 4.75312 13.6749C4.75312 13.815 4.80877 13.9493 4.90781 14.0483C5.00685 14.1474 5.14118 14.203 5.28125 14.203V13.1468ZM7.39375 14.203C7.53382 14.203 7.66815 14.1474 7.76719 14.0483C7.86623 13.9493 7.92188 13.815 7.92188 13.6749C7.92188 13.5348 7.86623 13.4005 7.76719 13.3015C7.66815 13.2024 7.53382 13.1468 7.39375 13.1468V14.203ZM4.225 3.1124H12.675V2.05615H4.225V3.1124ZM13.2031 3.64053V15.2593H14.2594V3.64053H13.2031ZM12.675 15.7874H4.225V16.8437H12.675V15.7874ZM3.69687 15.2593V3.64053H2.64062V15.2593H3.69687ZM4.225 15.7874C4.08493 15.7874 3.9506 15.7318 3.85156 15.6327C3.75252 15.5337 3.69687 15.3993 3.69687 15.2593H2.64062C2.64062 15.6795 2.80755 16.0825 3.10468 16.3796C3.40181 16.6767 3.8048 16.8437 4.225 16.8437V15.7874ZM13.2031 15.2593C13.2031 15.3993 13.1475 15.5337 13.0484 15.6327C12.9494 15.7318 12.8151 15.7874 12.675 15.7874V16.8437C13.0952 16.8437 13.4982 16.6767 13.7953 16.3796C14.0925 16.0825 14.2594 15.6795 14.2594 15.2593H13.2031ZM12.675 3.1124C12.8151 3.1124 12.9494 3.16804 13.0484 3.26709C13.1475 3.36613 13.2031 3.50046 13.2031 3.64053H14.2594C14.2594 3.22032 14.0925 2.81733 13.7953 2.52021C13.4982 2.22308 13.0952 2.05615 12.675 2.05615V3.1124ZM4.225 2.05615C3.8048 2.05615 3.40181 2.22308 3.10468 2.52021C2.80755 2.81733 2.64062 3.22032 2.64062 3.64053H3.69687C3.69687 3.50046 3.75252 3.36613 3.85156 3.26709C3.9506 3.16804 4.08493 3.1124 4.225 3.1124V2.05615ZM5.28125 6.28115H7.39375V5.2249H5.28125V6.28115ZM5.28125 9.97803H11.6187V8.92178H5.28125V9.97803ZM5.28125 12.0905H11.6187V11.0343H5.28125V12.0905ZM5.28125 14.203H7.39375V13.1468H5.28125V14.203Z"
                    fill="#272727" />
                <path
                    d="M11.6186 6.01689C11.7644 6.01689 11.8826 5.89867 11.8826 5.75283C11.8826 5.60699 11.7644 5.48877 11.6186 5.48877C11.4727 5.48877 11.3545 5.60699 11.3545 5.75283C11.3545 5.89867 11.4727 6.01689 11.6186 6.01689Z"
                    fill="#272727" stroke="#272727" />
            </g>
            <defs>
                <clipPath id="clip0_321_2714">
                    <rect width="16.962" height="16.962" fill="white" transform="translate(0.468262 0.784668)" />
                </clipPath>
            </defs>
        </svg>

    </a>
    <a href="#" wire:click="editProduct({{ $selectedProduct->id }})"
        class="bg-[#E8FBE8] px-2 py-2 rounded-lg hover:bg-[#BA2B60]/20">
        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_187_645)">
                <mask id="path-1-inside-1_187_645" fill="white">
                    <path
                        d="M15.4803 5.23036L13.0028 2.73574C12.8391 2.57256 12.6175 2.48096 12.3865 2.48096C12.1556 2.48096 11.934 2.57256 11.7703 2.73574L2.98704 11.5219L2.18511 14.989C2.15744 15.1157 2.15839 15.247 2.18788 15.3734C2.21737 15.4997 2.27466 15.6178 2.35557 15.7191C2.43647 15.8204 2.53894 15.9024 2.65549 15.9589C2.77205 16.0155 2.89974 16.0452 3.02925 16.046C3.08959 16.0521 3.1504 16.0521 3.21074 16.046L6.7097 15.2426L15.4803 6.46498C15.6432 6.30097 15.7347 6.07903 15.7347 5.84767C15.7347 5.61631 15.6432 5.39437 15.4803 5.23036ZM6.28763 14.4816L3.00814 15.1708L3.75521 11.9489L10.3268 5.39103L12.8593 7.92793L6.28763 14.4816ZM13.4248 7.31484L10.8924 4.77794L12.3612 3.315L14.8514 5.8519L13.4248 7.31484Z" />
                </mask>
                <path
                    d="M15.4803 5.23036L13.0028 2.73574C12.8391 2.57256 12.6175 2.48096 12.3865 2.48096C12.1556 2.48096 11.934 2.57256 11.7703 2.73574L2.98704 11.5219L2.18511 14.989C2.15744 15.1157 2.15839 15.247 2.18788 15.3734C2.21737 15.4997 2.27466 15.6178 2.35557 15.7191C2.43647 15.8204 2.53894 15.9024 2.65549 15.9589C2.77205 16.0155 2.89974 16.0452 3.02925 16.046C3.08959 16.0521 3.1504 16.0521 3.21074 16.046L6.7097 15.2426L15.4803 6.46498C15.6432 6.30097 15.7347 6.07903 15.7347 5.84767C15.7347 5.61631 15.6432 5.39437 15.4803 5.23036ZM6.28763 14.4816L3.00814 15.1708L3.75521 11.9489L10.3268 5.39103L12.8593 7.92793L6.28763 14.4816ZM13.4248 7.31484L10.8924 4.77794L12.3612 3.315L14.8514 5.8519L13.4248 7.31484Z"
                    fill="#003049" />
                <path
                    d="M13.0028 2.73574L13.8542 1.89012L13.8499 1.88581L13.0028 2.73574ZM11.7703 2.73574L10.9232 1.88581L10.9217 1.88735L11.7703 2.73574ZM2.98704 11.5219L2.13838 10.6735L1.89537 10.9166L1.81791 11.2514L2.98704 11.5219ZM2.18511 14.989L1.01597 14.7185L1.0143 14.7258L1.01271 14.7331L2.18511 14.989ZM3.02925 16.046L3.15002 14.8521L3.09341 14.8464L3.03651 14.846L3.02925 16.046ZM3.21074 16.046L3.33151 17.2399L3.40615 17.2324L3.47927 17.2156L3.21074 16.046ZM6.7097 15.2426L6.97823 16.4122L7.31462 16.335L7.55857 16.0908L6.7097 15.2426ZM15.4803 6.46498L16.3292 7.31317L16.3317 7.31061L15.4803 6.46498ZM15.4803 5.23036L14.6289 6.07597L14.6289 6.07598L15.4803 5.23036ZM6.28763 14.4816L6.53442 15.6559L6.88288 15.5827L7.135 15.3313L6.28763 14.4816ZM3.00814 15.1708L1.83916 14.8997L1.41432 16.7319L3.25494 16.3451L3.00814 15.1708ZM3.75521 11.9489L2.90757 11.0995L2.66396 11.3426L2.58622 11.6779L3.75521 11.9489ZM10.3268 5.39103L11.1761 4.54325L10.3285 3.69411L9.47921 4.54161L10.3268 5.39103ZM12.8593 7.92793L13.7066 8.77762L14.5567 7.92984L13.7085 7.08015L12.8593 7.92793ZM13.4248 7.31484L12.5756 8.16262L13.4348 9.02341L14.284 8.15263L13.4248 7.31484ZM10.8924 4.77794L10.0456 3.92772L9.19442 4.7755L10.0431 5.62572L10.8924 4.77794ZM12.3612 3.315L13.2176 2.47439L12.3708 1.61175L11.5144 2.46478L12.3612 3.315ZM14.8514 5.8519L15.7106 6.68969L16.5302 5.84913L15.7078 5.01128L14.8514 5.8519ZM16.3318 4.38475L13.8542 1.89013L12.1513 3.58135L14.6289 6.07597L16.3318 4.38475ZM13.8499 1.88581C13.4615 1.49867 12.9354 1.28096 12.3865 1.28096V3.68096C12.2996 3.68096 12.2166 3.64645 12.1556 3.58567L13.8499 1.88581ZM12.3865 1.28096C11.8377 1.28096 11.3116 1.49867 10.9232 1.88581L12.6175 3.58567C12.5565 3.64645 12.4735 3.68096 12.3865 3.68096V1.28096ZM10.9217 1.88735L2.13838 10.6735L3.83571 12.3703L12.619 3.58413L10.9217 1.88735ZM1.81791 11.2514L1.01597 14.7185L3.35424 15.2594L4.15617 11.7923L1.81791 11.2514ZM1.01271 14.7331C0.946996 15.0341 0.949248 15.3461 1.0193 15.6462L3.35646 15.1006C3.36754 15.148 3.36789 15.1973 3.3575 15.2449L1.01271 14.7331ZM1.0193 15.6462C1.08936 15.9463 1.22549 16.227 1.41788 16.4679L3.29325 14.9703C3.32384 15.0086 3.34539 15.0531 3.35646 15.1006L1.0193 15.6462ZM1.41788 16.4679C1.61028 16.7089 1.85411 16.9039 2.13165 17.0385L3.17934 14.8793C3.22377 14.9008 3.26266 14.932 3.29325 14.9703L1.41788 16.4679ZM2.13165 17.0385C2.4092 17.1732 2.71339 17.2441 3.02198 17.246L3.03651 14.846C3.08609 14.8463 3.13489 14.8577 3.17934 14.8793L2.13165 17.0385ZM2.90848 17.2399C3.04913 17.2541 3.19086 17.2541 3.33151 17.2399L3.08997 14.8521C3.10993 14.8501 3.13005 14.8501 3.15002 14.8521L2.90848 17.2399ZM3.47927 17.2156L6.97823 16.4122L6.44117 14.0731L2.94221 14.8764L3.47927 17.2156ZM7.55857 16.0908L16.3292 7.31317L14.6315 5.61679L5.86083 14.3945L7.55857 16.0908ZM16.3317 7.31061C16.7181 6.92157 16.9347 6.39555 16.9347 5.84767H14.5347C14.5347 5.7625 14.5683 5.68037 14.6289 5.61936L16.3317 7.31061ZM16.9347 5.84767C16.9347 5.29978 16.7181 4.77376 16.3317 4.38473L14.6289 6.07598C14.5683 6.01497 14.5347 5.93284 14.5347 5.84767H16.9347ZM6.04084 13.3072L2.76135 13.9964L3.25494 16.3451L6.53442 15.6559L6.04084 13.3072ZM4.17713 15.4418L4.9242 12.22L2.58622 11.6779L1.83916 14.8997L4.17713 15.4418ZM4.60285 12.7983L11.1745 6.24044L9.47921 4.54161L2.90757 11.0995L4.60285 12.7983ZM9.47757 6.23881L12.01 8.7757L13.7085 7.08015L11.1761 4.54325L9.47757 6.23881ZM12.0119 7.07824L5.44027 13.6319L7.135 15.3313L13.7066 8.77762L12.0119 7.07824ZM14.2741 6.46706L11.7417 3.93016L10.0431 5.62572L12.5756 8.16262L14.2741 6.46706ZM11.7393 5.62817L13.2081 4.16522L11.5144 2.46478L10.0456 3.92772L11.7393 5.62817ZM11.5049 4.15561L13.9951 6.69251L15.7078 5.01128L13.2176 2.47439L11.5049 4.15561ZM13.9923 5.01411L12.5657 6.47705L14.284 8.15263L15.7106 6.68969L13.9923 5.01411Z"
                    fill="#272727" mask="url(#path-1-inside-1_187_645)" />
            </g>
            <defs>
                <clipPath id="clip0_187_645">
                    <rect width="16.962" height="16.962" fill="white" transform="translate(0.46875 0.784668)" />
                </clipPath>
            </defs>
        </svg>
    </a>


    <button onclick="confirmDelete({{ $selectedProduct->id }})"
        class="bg-[#E8FBE8] px-2 py-2 rounded-lg hover:bg-[#BA2B60]/20">
        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M6.74799 3.83327H6.61547C6.68836 3.83327 6.74799 3.77364 6.74799 3.70075V3.83327H11.7836V3.70075C11.7836 3.77364 11.8432 3.83327 11.9161 3.83327H11.7836V5.02591H12.9762V3.70075C12.9762 3.11603 12.5008 2.64062 11.9161 2.64062H6.61547C6.03075 2.64062 5.55535 3.11603 5.55535 3.70075V5.02591H6.74799V3.83327ZM15.0965 5.02591H3.43509C3.1419 5.02591 2.90503 5.26278 2.90503 5.55597V6.08604C2.90503 6.15892 2.96466 6.21855 3.03755 6.21855H4.03804L4.44718 14.8818C4.47369 15.4466 4.9408 15.8922 5.50565 15.8922H13.0259C13.5924 15.8922 14.0579 15.4483 14.0844 14.8818L14.4935 6.21855H15.494C15.5669 6.21855 15.6265 6.15892 15.6265 6.08604V5.55597C15.6265 5.26278 15.3897 5.02591 15.0965 5.02591ZM12.8984 14.6996H5.6332L5.23234 6.21855H13.2992L12.8984 14.6996Z"
                fill="#272727" />
        </svg>
    </button>

    {{-- <a href="{{ route('dashboard.product.index.delete', $productId) }}"
        class="bg-[#E8FBE8] px-2 py-2 rounded-lg hover:bg-[#BA2B60]/20"
        onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M6.74799 3.83327H6.61547C6.68836 3.83327 6.74799 3.77364 6.74799 3.70075V3.83327H11.7836V3.70075C11.7836 3.77364 11.8432 3.83327 11.9161 3.83327H11.7836V5.02591H12.9762V3.70075C12.9762 3.11603 12.5008 2.64062 11.9161 2.64062H6.61547C6.03075 2.64062 5.55535 3.11603 5.55535 3.70075V5.02591H6.74799V3.83327ZM15.0965 5.02591H3.43509C3.1419 5.02591 2.90503 5.26278 2.90503 5.55597V6.08604C2.90503 6.15892 2.96466 6.21855 3.03755 6.21855H4.03804L4.44718 14.8818C4.47369 15.4466 4.9408 15.8922 5.50565 15.8922H13.0259C13.5924 15.8922 14.0579 15.4483 14.0844 14.8818L14.4935 6.21855H15.494C15.5669 6.21855 15.6265 6.15892 15.6265 6.08604V5.55597C15.6265 5.26278 15.3897 5.02591 15.0965 5.02591ZM12.8984 14.6996H5.6332L5.23234 6.21855H13.2992L12.8984 14.6996Z"
                fill="#272727" />
        </svg>
    </a> --}}
</div>
{{-- </td> --}}
