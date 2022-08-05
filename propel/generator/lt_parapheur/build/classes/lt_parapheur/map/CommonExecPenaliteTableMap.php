<?php



/**
 * This class defines the structure of the 'exec_penalite' table.
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
class CommonExecPenaliteTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonExecPenaliteTableMap';

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
        $this->setName('exec_penalite');
        $this->setPhpName('CommonExecPenalite');
        $this->setClassname('CommonExecPenalite');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addForeignKey('id_dossier_paiement', 'IdDossierPaiement', 'INTEGER', 'exec_dossier_paiement', 'id', false, null, null);
        $this->addColumn('libelle', 'Libelle', 'VARCHAR', false, 255, null);
        $this->addColumn('taille', 'Taille', 'VARCHAR', false, 255, null);
        $this->addColumn('id_blob', 'IdBlob', 'INTEGER', false, null, null);
        $this->addColumn('montant_penalite', 'MontantPenalite', 'DOUBLE', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonExecDossierPaiement', 'CommonExecDossierPaiement', RelationMap::MANY_TO_ONE, array('id_dossier_paiement' => 'id', ), null, null);
    } // buildRelations()

} // CommonExecPenaliteTableMap
