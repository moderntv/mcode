<h1 align=center>mCODE</h1>

<p align=center>
   📺 PHP quality assurance for ModernTV projects.
</p>

<p align=center>
  <a href="https://github.com/moderntv/mstyle/actions"><img src="https://badgen.net/github/checks/moderntv/mstyle/master?cache=300"></a>
  <a href="https://coveralls.io/r/moderntv/mstyle"><img src="https://badgen.net/coveralls/c/github/moderntv/mstyle?cache=300"></a>
  <a href="https://packagist.org/packages/moderntv/mstyle"><img src="https://badgen.net/packagist/dm/moderntv/mstyle"></a>
  <a href="https://packagist.org/packages/moderntv/mstyle"><img src="https://badgen.net/packagist/v/moderntv/mstyle"></a>
  <a href="https://packagist.org/packages/moderntv/mstyle"><img src="https://badgen.net/packagist/php/moderntv/mstyle"></a>
  <a href="https://github.com/moderntv/mstyle"><img src="https://badgen.net/github/license/moderntv/mstyle"></a>
</p>

<p align=center>
🕹 <a href="https://f3l1x.io">f3l1x.io</a> | 💻 <a href="https://github.com/f3l1x">f3l1x</a> | 🐦 <a href="https://twitter.com/xf3l1x">@xf3l1x</a>
</p>

-----

## Usage

To install latest version of `mcode/mcode` use [Composer](https://getcomposer.com).

```bash
composer require mcode/mcode
```

## Documentation

1. Install this package.
2. Create `ruleset.xml` file.

  ```xml
  <?xml version="1.0" encoding="UTF-8"?>
  <ruleset>
    <rule ref="./vendor/mcode/mcode/src/codesniffer.xml"/>
  </ruleset>
  ```

3. Run codesniffer.

  ```sh
  vendor/bin/phpcs --cache=var/codesniffer.dat --standard=ruleset.xml app
  ```

## ModernTV Coding Standart:
    Generic.Arrays.DisallowLongArraySyntax
    Generic.Classes.DuplicateClassName
    Generic.CodeAnalysis.EmptyStatement
    Generic.CodeAnalysis.UnconditionalIfStatement
    Generic.CodeAnalysis.UnnecessaryFinalModifier
    Generic.ControlStructures.InlineControlStructure
    Generic.Files.ByteOrderMark
    Generic.Files.InlineHTML
    Generic.Files.LineEndings
    Generic.Files.OneObjectStructurePerFile
    Generic.Formatting.DisallowMultipleStatements
    Generic.Formatting.SpaceAfterCast
    Generic.Functions.FunctionCallArgumentSpacing
    Generic.Functions.OpeningFunctionBraceBsdAllman
    Generic.NamingConventions.CamelCapsFunctionName
    Generic.NamingConventions.ConstructorName
    Generic.NamingConventions.InterfaceNameSuffix
    Generic.NamingConventions.UpperCaseConstantName
    Generic.PHP.BacktickOperator
    Generic.PHP.CharacterBeforePHPOpeningTag
    Generic.PHP.DeprecatedFunctions
    Generic.PHP.DisallowAlternativePHPTags
    Generic.PHP.DisallowShortOpenTag
    Generic.PHP.ForbiddenFunctions
    Generic.PHP.LowerCaseConstant
    Generic.PHP.LowerCaseKeyword
    Generic.PHP.LowerCaseType
    Generic.PHP.SAPIUsage
    Generic.Strings.UnnecessaryStringConcat
    Generic.WhiteSpace.DisallowTabIndent
    Generic.WhiteSpace.IncrementDecrementSpacing
    Generic.WhiteSpace.ScopeIndent
    PEAR.Classes.ClassDeclaration
    PEAR.Commenting.InlineComment
    PEAR.Functions.ValidDefaultValue
    PEAR.WhiteSpace.ObjectOperatorIndent
    PSR2.Classes.PropertyDeclaration
    PSR2.ControlStructures.ControlStructureSpacing
    PSR2.ControlStructures.ElseIfDeclaration
    PSR2.Files.ClosingTag
    PSR2.Files.EndFileNewline
    PSR2.Methods.FunctionCallSignature
    PSR2.Methods.FunctionClosingBrace
    PSR2.Namespaces.NamespaceDeclaration
    PSR2.Namespaces.UseDeclaration
    PSR12.Keywords.ShortFormTypeKeywords
    PSR12.Properties.ConstantVisibility
    SlevomatCodingStandard.Arrays.DisallowImplicitArrayCreation
    SlevomatCodingStandard.Arrays.SingleLineArrayWhitespace
    SlevomatCodingStandard.Arrays.TrailingArrayComma
    SlevomatCodingStandard.Classes.ClassConstantVisibility
    SlevomatCodingStandard.Classes.ClassStructure
    SlevomatCodingStandard.Classes.ConstantSpacing
    SlevomatCodingStandard.Classes.DisallowLateStaticBindingForConstants
    SlevomatCodingStandard.Classes.DisallowMultiConstantDefinition
    SlevomatCodingStandard.Classes.DisallowMultiPropertyDefinition
    SlevomatCodingStandard.Classes.EmptyLinesAroundClassBraces
    SlevomatCodingStandard.Classes.ModernClassNameReference
    SlevomatCodingStandard.Classes.PropertyDeclaration
    SlevomatCodingStandard.Classes.PropertySpacing
    SlevomatCodingStandard.Classes.RequireConstructorPropertyPromotion
    SlevomatCodingStandard.Classes.SuperfluousInterfaceNaming
    SlevomatCodingStandard.Classes.SuperfluousTraitNaming
    SlevomatCodingStandard.Classes.TraitUseDeclaration
    SlevomatCodingStandard.Classes.TraitUseSpacing
    SlevomatCodingStandard.Classes.UselessLateStaticBinding
    SlevomatCodingStandard.Commenting.DisallowOneLinePropertyDocComment
    SlevomatCodingStandard.Commenting.EmptyComment
    SlevomatCodingStandard.Commenting.ForbiddenAnnotations
    SlevomatCodingStandard.Commenting.ForbiddenComments
    SlevomatCodingStandard.Commenting.InlineDocCommentDeclaration
    SlevomatCodingStandard.Commenting.RequireOneLinePropertyDocComment
    SlevomatCodingStandard.Commenting.UselessFunctionDocComment
    SlevomatCodingStandard.Commenting.UselessInheritDocComment
    SlevomatCodingStandard.ControlStructures.BlockControlStructureSpacing
    SlevomatCodingStandard.ControlStructures.DisallowYodaComparison
    SlevomatCodingStandard.ControlStructures.LanguageConstructWithParentheses
    SlevomatCodingStandard.ControlStructures.UselessIfConditionWithReturn
    SlevomatCodingStandard.ControlStructures.UselessTernaryOperator
    SlevomatCodingStandard.Files.TypeNameMatchesFileName
    SlevomatCodingStandard.Functions.RequireTrailingCommaInDeclaration
    SlevomatCodingStandard.Functions.StaticClosure
    SlevomatCodingStandard.Functions.UnusedInheritedVariablePassedToClosure
    SlevomatCodingStandard.Functions.UselessParameterDefaultValue
    SlevomatCodingStandard.Namespaces.AlphabeticallySortedUses
    SlevomatCodingStandard.Namespaces.DisallowGroupUse
    SlevomatCodingStandard.Namespaces.FullyQualifiedClassNameInAnnotation
    SlevomatCodingStandard.Namespaces.MultipleUsesPerLine
    SlevomatCodingStandard.Namespaces.NamespaceDeclaration
    SlevomatCodingStandard.Namespaces.NamespaceSpacing
    SlevomatCodingStandard.Namespaces.ReferenceUsedNamesOnly
    SlevomatCodingStandard.Namespaces.RequireOneNamespaceInFile
    SlevomatCodingStandard.Namespaces.UnusedUses
    SlevomatCodingStandard.Namespaces.UseDoesNotStartWithBackslash
    SlevomatCodingStandard.Namespaces.UseFromSameNamespace
    SlevomatCodingStandard.Namespaces.UselessAlias
    SlevomatCodingStandard.Namespaces.UseSpacing
    SlevomatCodingStandard.PHP.ShortList
    SlevomatCodingStandard.PHP.TypeCast
    SlevomatCodingStandard.PHP.UselessParentheses
    SlevomatCodingStandard.PHP.UselessSemicolon
    SlevomatCodingStandard.TypeHints.DeclareStrictTypes
    SlevomatCodingStandard.TypeHints.LongTypeHints
    SlevomatCodingStandard.TypeHints.NullableTypeForNullDefaultValue
    SlevomatCodingStandard.TypeHints.NullTypeHintOnLastPosition
    SlevomatCodingStandard.TypeHints.ParameterTypeHint
    SlevomatCodingStandard.TypeHints.ParameterTypeHintSpacing
    SlevomatCodingStandard.TypeHints.PropertyTypeHint
    SlevomatCodingStandard.TypeHints.ReturnTypeHint
    SlevomatCodingStandard.TypeHints.ReturnTypeHintSpacing
    SlevomatCodingStandard.TypeHints.UnionTypeHintFormat
    SlevomatCodingStandard.TypeHints.UselessConstantTypeHint
    SlevomatCodingStandard.Variables.DuplicateAssignmentToVariable
    SlevomatCodingStandard.Variables.UnusedVariable
    SlevomatCodingStandard.Variables.UselessVariable
    Squiz.Arrays.ArrayBracketSpacing
    Squiz.Arrays.ArrayDeclaration
    Squiz.Classes.ClassFileName
    Squiz.Classes.SelfMemberReference
    Squiz.Classes.ValidClassName
    Squiz.Commenting.DocCommentAlignment
    Squiz.ControlStructures.ControlSignature
    Squiz.Functions.FunctionDeclaration
    Squiz.Functions.GlobalFunction
    Squiz.Operators.ValidLogicalOperators
    Squiz.PHP.GlobalKeyword
    Squiz.PHP.InnerFunctions
    Squiz.PHP.LowercasePHPFunctions
    Squiz.PHP.NonExecutableCode
    Squiz.Scope.MethodScope
    Squiz.Scope.StaticThisUsage
    Squiz.Strings.ConcatenationSpacing
    Squiz.WhiteSpace.CastSpacing
    Squiz.WhiteSpace.ControlStructureSpacing
    Squiz.WhiteSpace.FunctionOpeningBraceSpace
    Squiz.WhiteSpace.FunctionSpacing
    Squiz.WhiteSpace.LanguageConstructSpacing
    Squiz.WhiteSpace.LogicalOperatorSpacing
    Squiz.WhiteSpace.ObjectOperatorSpacing
    Squiz.WhiteSpace.OperatorSpacing
    Squiz.WhiteSpace.ScopeClosingBrace
    Squiz.WhiteSpace.ScopeKeywordSpacing
    Squiz.WhiteSpace.SemicolonSpacing
    Squiz.WhiteSpace.SuperfluousWhitespace

## Unused rules:
    Generic.CodeAnalysis.ForLoopShouldBeWhileLoop
    Generic.Commenting.DocComment
    Generic.WhiteSpace.DisallowSpaceIndent
    PEAR.Formatting.MultiLineAssignment
    PSR1.Classes.ClassDeclaration
    PSR1.Files.SideEffects
    PSR1.Methods.CamelCapsMethodName
    PSR2.ControlStructures.SwitchDeclaration
    PSR2.Methods.MethodDeclaration
    SlevomatCodingStandard.Arrays.AlphabeticallySortedByKeys
    SlevomatCodingStandard.Arrays.DisallowPartiallyKeyed
    SlevomatCodingStandard.Arrays.MultiLineArrayEndBracketPlacement
    SlevomatCodingStandard.Arrays.ArrayAccessSniff
    SlevomatCodingStandard.Attributes.AttributeAndTargetSpacing
    SlevomatCodingStandard.Attributes.AttributesOrder
    SlevomatCodingStandard.Attributes.DisallowAttributesJoining
    SlevomatCodingStandard.Attributes.DisallowMultipleAttributesPerLine
    SlevomatCodingStandard.Attributes.RequireAttributeAfterDocComment
    SlevomatCodingStandard.Classes.BackedEnumTypeSpacing
    SlevomatCodingStandard.Classes.ClassLength
    SlevomatCodingStandard.Classes.ClassMemberSpacing
    SlevomatCodingStandard.Classes.DisallowConstructorPropertyPromotion
    SlevomatCodingStandard.Classes.DisallowStringExpressionPropertyFetch
    SlevomatCodingStandard.Classes.EnumCaseSpacing
    SlevomatCodingStandard.Classes.ForbiddenPublicProperty
    SlevomatCodingStandard.Classes.MethodSpacing
    SlevomatCodingStandard.Classes.ParentCallSpacing
    SlevomatCodingStandard.Classes.RequireAbstractOrFinal
    SlevomatCodingStandard.Classes.RequireMultiLineMethodSignature
    SlevomatCodingStandard.Classes.RequireSelfReference
    SlevomatCodingStandard.Classes.RequireSingleLineMethodSignature
    SlevomatCodingStandard.Classes.SuperfluousAbstractClassNaming
    SlevomatCodingStandard.Classes.SuperfluousErrorNaming
    SlevomatCodingStandard.Classes.SuperfluousExceptionNaming
    SlevomatCodingStandard.Commenting.AnnotationName
    SlevomatCodingStandard.Commenting.DeprecatedAnnotationDeclaration
    SlevomatCodingStandard.Commenting.DisallowCommentAfterCode
    SlevomatCodingStandard.Commenting.DocCommentSpacing
    SlevomatCodingStandard.Commenting.RequireOneLineDocComment
    SlevomatCodingStandard.Complexity.Cognitive
    SlevomatCodingStandard.ControlStructures.AssignmentInCondition
    SlevomatCodingStandard.ControlStructures.DisallowContinueWithoutIntegerOperandInSwitch
    SlevomatCodingStandard.ControlStructures.DisallowEmpty
    SlevomatCodingStandard.ControlStructures.DisallowNullSafeObjectOperator
    SlevomatCodingStandard.ControlStructures.DisallowShortTernaryOperator
    SlevomatCodingStandard.ControlStructures.DisallowTrailingMultiLineTernaryOperatorSniff
    SlevomatCodingStandard.ControlStructures.EarlyExit
    SlevomatCodingStandard.ControlStructures.JumpStatementsSpacing
    SlevomatCodingStandard.ControlStructures.NewWithParentheses
    SlevomatCodingStandard.ControlStructures.NewWithoutParentheses
    SlevomatCodingStandard.ControlStructures.RequireMultiLineCondition
    SlevomatCodingStandard.ControlStructures.RequireMultiLineTernaryOperator
    SlevomatCodingStandard.ControlStructures.RequireNullCoalesceEqualOperator
    SlevomatCodingStandard.ControlStructures.RequireNullCoalesceOperator
    SlevomatCodingStandard.ControlStructures.RequireNullSafeObjectOperator
    SlevomatCodingStandard.ControlStructures.RequireShortTernaryOperator
    SlevomatCodingStandard.ControlStructures.RequireSingleLineCondition
    SlevomatCodingStandard.ControlStructures.RequireTernaryOperator
    SlevomatCodingStandard.ControlStructures.RequireYodaComparison
    SlevomatCodingStandard.Exceptions.DeadCatch
    SlevomatCodingStandard.Exceptions.DisallowNonCapturingCatch
    SlevomatCodingStandard.Exceptions.ReferenceThrowableOnly
    SlevomatCodingStandard.Exceptions.RequireNonCapturingCatch
    SlevomatCodingStandard.Files.FileLength
    SlevomatCodingStandard.Files.LineLength
    SlevomatCodingStandard.Functions.ArrowFunctionDeclaration
    SlevomatCodingStandard.Functions.DisallowArrowFunction
    SlevomatCodingStandard.Functions.DisallowEmptyFunction
    SlevomatCodingStandard.Functions.DisallowNamedArguments
    SlevomatCodingStandard.Functions.DisallowTrailingCommaInCall
    SlevomatCodingStandard.Functions.DisallowTrailingCommaInClosureUse
    SlevomatCodingStandard.Functions.DisallowTrailingCommaInDeclaration
    SlevomatCodingStandard.Functions.FunctionLength
    SlevomatCodingStandard.Functions.NamedArgumentSpacing
    SlevomatCodingStandard.Functions.RequireArrowFunction
    SlevomatCodingStandard.Functions.RequireMultiLineCall
    SlevomatCodingStandard.Functions.RequireSingleLineCall
    SlevomatCodingStandard.Functions.RequireTrailingCommaInCall
    SlevomatCodingStandard.Functions.RequireTrailingCommaInClosureUse
    SlevomatCodingStandard.Functions.StrictCall
    SlevomatCodingStandard.Functions.UnusedParameter
    SlevomatCodingStandard.Namespaces.FullyQualifiedExceptions
    SlevomatCodingStandard.Namespaces.FullyQualifiedGlobalConstants
    SlevomatCodingStandard.Namespaces.FullyQualifiedGlobalFunctions
    SlevomatCodingStandard.Namespaces.UseOnlyWhitelistedNamespaces
    SlevomatCodingStandard.Numbers.DisallowNumericLiteralSeparator
    SlevomatCodingStandard.Numbers.RequireNumericLiteralSeparator
    SlevomatCodingStandard.Operators.DisallowEqualOperators
    SlevomatCodingStandard.Operators.DisallowIncrementAndDecrementOperators
    SlevomatCodingStandard.Operators.NegationOperatorSpacing
    SlevomatCodingStandard.Operators.RequireCombinedAssignmentOperator
    SlevomatCodingStandard.Operators.RequireOnlyStandaloneIncrementAndDecrementOperators
    SlevomatCodingStandard.Operators.SpreadOperatorSpacing
    SlevomatCodingStandard.PHP.DisallowDirectMagicInvokeCall
    SlevomatCodingStandard.PHP.DisallowReference
    SlevomatCodingStandard.PHP.ForbiddenClasses
    SlevomatCodingStandard.PHP.OptimizedFunctionsWithoutUnpacking
    SlevomatCodingStandard.PHP.ReferenceSpacing
    SlevomatCodingStandard.PHP.RequireExplicitAssertion
    SlevomatCodingStandard.PHP.RequireNowdoc
    SlevomatCodingStandard.Strings.DisallowVariableParsing
    SlevomatCodingStandard.TypeHints.DisallowArrayTypeHintSyntax
    SlevomatCodingStandard.TypeHints.DisallowMixedTypeHint
    SlevomatCodingStandard.Variables.DisallowVariableVariable
    SlevomatCodingStandard.Variables.DisallowSuperGlobalVariable
    SlevomatCodingStandard.Whitespaces.DuplicateSpaces
    Squiz.Commenting.EmptyCatchComment
    Squiz.Commenting.FunctionComment
    Squiz.Commenting.VariableComment
    Squiz.ControlStructures.ForEachLoopDeclaration
    Squiz.ControlStructures.ForLoopDeclaration
    Squiz.Functions.FunctionDeclarationArgumentSpacing
    Squiz.Functions.MultiLineFunctionDeclaration
    Squiz.Operators.IncrementDecrementUsage
    Squiz.PHP.Heredoc
    Squiz.Strings.DoubleQuoteUsage
    Squiz.Strings.EchoedStrings

## Development

This package is currently maintained by these authors.

<a href="https://github.com/f3l1x">
    <img width="80" height="80" src="https://avatars2.githubusercontent.com/u/538058?v=3&s=80">
</a>
