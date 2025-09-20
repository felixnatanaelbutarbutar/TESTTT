```mermaid
flowchart TD
    %% ========== DATA PREPARATION ==========
    A[📊 Dataset CEFR<br/>Words/Sentences with Labels A1-C2] --> B[🔧 Data Preprocessing]
    
    B --> B1[Text Normalization<br/>• Lowercase conversion<br/>• Remove special chars<br/>• Handle punctuation]
    B1 --> B2[BERT Tokenization<br/>• WordPiece tokenization<br/>• Add [CLS] and [SEP] tokens<br/>• Padding/truncation]
    B2 --> B3[Optional: Linguistic Processing<br/>• Lemmatization<br/>• POS tagging<br/>• Syntax features]
    
    %% ========== DATA SPLIT ==========
    B3 --> DS[📈 Data Split<br/>Train: 70% | Val: 15% | Test: 15%]
    
    %% ========== MODEL ARCHITECTURE ==========
    DS --> C[🤖 BERT Base Model<br/>Pre-trained Encoder<br/>12 layers, 768 hidden units]
    C --> D[🎯 Pooling Strategy]
    D --> D1[CLS Token Pooling]
    D --> D2[Mean Pooling]
    D --> D3[Max Pooling]
    
    D1 --> E[🧠 Classification Head]
    D2 --> E
    D3 --> E
    
    E --> E1[Dense Layer<br/>768 → 256 units<br/>ReLU activation]
    E1 --> E2[Dropout Layer<br/>p = 0.3]
    E2 --> E3[Output Layer<br/>256 → 6 units<br/>Softmax activation]
    
    %% ========== TRAINING PROCESS ==========
    E3 --> F[🎯 Training Loop]
    F --> F1[Loss Function<br/>Categorical Cross-Entropy<br/>+ Label Smoothing]
    F --> F2[Optimizer<br/>AdamW<br/>lr=2e-5, weight_decay=0.01]
    F --> F3[Learning Rate Scheduler<br/>Linear warmup (10% steps)<br/>+ Cosine decay]
    F --> F4[Regularization<br/>• Gradient clipping<br/>• Early stopping<br/>• L2 regularization]
    
    %% ========== VALIDATION ==========
    F --> V[📊 Validation & Metrics]
    V --> V1[Primary Metrics<br/>• Accuracy<br/>• Macro F1-score<br/>• Weighted F1-score]
    V --> V2[Additional Analysis<br/>• Confusion matrix<br/>• Per-class precision/recall<br/>• Classification report]
    V --> V3[Model Selection<br/>Best model on validation F1]
    
    %% ========== INFERENCE PIPELINE ==========
    K[🆕 New Input<br/>Word/Sentence] --> L[🔧 Preprocessing Pipeline]
    L --> L1[Text Normalization<br/>Same as training]
    L1 --> L2[BERT Tokenization<br/>Same tokenizer as training]
    L2 --> C
    
    %% ========== OUTPUT ==========
    E3 --> M[📋 Prediction Output]
    M --> M1[CEFR Level Prediction<br/>A1, A2, B1, B2, C1, C2]
    M --> M2[Confidence Scores<br/>Probability distribution<br/>across all levels]
    M --> M3[Additional Info<br/>• Top-2 predictions<br/>• Confidence threshold<br/>• Uncertainty measure]
    
    %% ========== MODEL EVALUATION ==========
    V3 --> TEST[🧪 Final Test Evaluation]
    TEST --> R[📈 Results & Analysis<br/>• Test accuracy<br/>• Error analysis<br/>• Linguistic insights]
    
    %% Styling
    classDef dataClass fill:#e1f5fe,stroke:#01579b,stroke-width:2px
    classDef modelClass fill:#f3e5f5,stroke:#4a148c,stroke-width:2px
    classDef trainingClass fill:#e8f5e8,stroke:#1b5e20,stroke-width:2px
    classDef inferenceClass fill:#fff3e0,stroke:#e65100,stroke-width:2px
    classDef outputClass fill:#fce4ec,stroke:#880e4f,stroke-width:2px
    
    class A,B,B1,B2,B3,DS dataClass
    class C,D,D1,D2,D3,E,E1,E2,E3 modelClass
    class F,F1,F2,F3,F4,V,V1,V2,V3 trainingClass
    class K,L,L1,L2,TEST inferenceClass
    class M,M1,M2,M3,R outputClass
