<?php



/**
 * This class defines the structure of the 'caution_signature_restitution' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lt_parapheur.map
 */
class CommonCautionSignatureRestitutionTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonCautionSignatureRestitutionTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('caution_signature_restitution');
        $this->setPhpName('CommonCautionSignatureRestitution');
        $this->setClassname('CommonCautionSignatureRestitution');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('ID_BLOB', 'IdBlob', 'INTEGER', true, null, null);
        $this->addColumn('ID_MAINLEVEE', 'IdMainlevee', 'INTEGER', true, null, null);
        $this->addColumn('ID_AGENT_SIGNATAIRE', 'IdAgentSignataire', 'INTEGER', true, null, null);
        $this->addColumn('REVISION', 'Revision', 'INTEGER', true, null, null);
        $this->addColumn('TYPE_DOCUMENT', 'TypeDocument', 'CHAR', true, null, '0');
        $this->getColumn('TYPE_DOCUMENT', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('DATE_SIGNATURE', 'DateSignature', 'TIMESTAMP', true, null, null);
        $this->addColumn('EMETTEUR', 'Emetteur', 'VARCHAR', true, 255, null);
        $this->addColumn('DETAIL_EMETTEUR', 'DetailEmetteur', 'VARCHAR', false, 250, null);
        $this->addColumn('SIGNATAIRE', 'Signataire', 'VARCHAR', true, 255, null);
        $this->addColumn('DETAIL_SIGNATAIRE', 'DetailSignataire', 'VARCHAR', false, 250, null);
        $this->addColumn('REVOQUE', 'Revoque', 'CHAR', true, null, null);
        $this->getColumn('REVOQUE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('NON_REPUDIATION', 'NonRepudiation', 'CHAR', true, null, '0');
        $this->getColumn('NON_REPUDIATION', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('CHAINE_VALIDE', 'ChaineValide', 'CHAR', true, null, null);
        $this->getColumn('CHAINE_VALIDE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('DATE_DEB_PERIODE_VALIDITE', 'DateDebPeriodeValidite', 'TIMESTAMP', true, null, null);
        $this->addColumn('DATE_FIN_PERIODE_VALIDITE', 'DateFinPeriodeValidite', 'TIMESTAMP', true, null, null);
        $this->addColumn('PERIODE_VALIDITE', 'PeriodeValidite', 'CHAR', true, null, '0');
        $this->getColumn('PERIODE_VALIDITE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('SIGNATURE_VALIDE', 'SignatureValide', 'CHAR', true, null, null);
        $this->getColumn('SIGNATURE_VALIDE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('TYPE_SIGNATURE', 'TypeSignature', 'CHAR', true, null, '1');
        $this->getColumn('TYPE_SIGNATURE', false)->setValueSet(array (
  0 => '1',
  1 => '2',
));
        $this->addColumn('XML_SIGNATURE', 'XmlSignature', 'LONGVARCHAR', true, null, null);
        $this->addColumn('NOM_FICHIER', 'NomFichier', 'VARCHAR', true, 255, null);
        $this->addColumn('HASH', 'Hash', 'VARCHAR', false, 255, null);
        $this->addColumn('ALGORITHME_HASH', 'AlgorithmeHash', 'VARCHAR', false, 50, null);
        $this->addColumn('DATE_DERNIERE_VERIFICATION', 'DateDerniereVerification', 'TIMESTAMP', false, null, null);
        $this->addColumn('SIGNATURE_ARCHIVEE', 'SignatureArchivee', 'TINYINT', true, null, 0);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonCautionSignatureRestitutionTableMap
