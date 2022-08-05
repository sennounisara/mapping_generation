<?php



/**
 * This class defines the structure of the 't_signature_piece_jointe' table.
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
class TSignaturePieceJointeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.TSignaturePieceJointeTableMap';

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
        $this->setName('t_signature_piece_jointe');
        $this->setPhpName('TSignaturePieceJointe');
        $this->setClassname('TSignaturePieceJointe');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('ID_BLOB', 'IdBlob', 'INTEGER', true, null, null);
        $this->addColumn('REVISION', 'Revision', 'INTEGER', true, null, null);
        $this->addColumn('ID_DEMANDE', 'IdDemande', 'INTEGER', true, null, null);
        $this->addColumn('ID_HISTORIQUE', 'IdHistorique', 'INTEGER', false, null, null);
        $this->addColumn('DATE_SIGNATURE', 'DateSignature', 'TIMESTAMP', true, null, null);
        $this->addColumn('EMETTEUR', 'Emetteur', 'VARCHAR', false, 255, null);
        $this->addColumn('SIGNATAIRE', 'Signataire', 'VARCHAR', false, 255, null);
        $this->addColumn('REVOQUE', 'Revoque', 'CHAR', false, null, null);
        $this->getColumn('REVOQUE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
  2 => '2',
));
        $this->addColumn('CHAINE_VALIDE', 'ChaineValide', 'CHAR', false, null, null);
        $this->getColumn('CHAINE_VALIDE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
  2 => '2',
));
        $this->addColumn('DATE_DEB_PERIODE_VALIDITE', 'DateDebPeriodeValidite', 'DATE', false, null, null);
        $this->addColumn('DATE_FIN_PERIODE_VALIDITE', 'DateFinPeriodeValidite', 'DATE', false, null, null);
        $this->addColumn('SIGNATURE_VALIDE', 'SignatureValide', 'CHAR', false, null, null);
        $this->getColumn('SIGNATURE_VALIDE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
  2 => '2',
  3 => '5',
));
        $this->addColumn('FROM_DEMANDEUR', 'FromDemandeur', 'CHAR', true, null, '0');
        $this->getColumn('FROM_DEMANDEUR', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        $this->addColumn('TYPE_SIGNATURE', 'TypeSignature', 'CHAR', false, null, '1');
        $this->getColumn('TYPE_SIGNATURE', false)->setValueSet(array (
  0 => '1',
  1 => '2',
));
        $this->addColumn('XML_SIGNATURE', 'XmlSignature', 'LONGVARCHAR', false, null, null);
        $this->addColumn('NOM_FICHIER', 'NomFichier', 'VARCHAR', true, 255, null);
        $this->addColumn('hash', 'Hash', 'VARCHAR', false, 255, null);
        $this->addColumn('algorithme_hash', 'AlgorithmeHash', 'VARCHAR', false, 50, null);
        $this->addColumn('DATE_DERNIERE_VERIFICATION', 'DateDerniereVerification', 'TIMESTAMP', false, null, null);
        $this->addColumn('SIGNATURE_ELECTRONIQUE', 'SignatureElectronique', 'CHAR', true, null, '0');
        $this->getColumn('SIGNATURE_ELECTRONIQUE', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // TSignaturePieceJointeTableMap
