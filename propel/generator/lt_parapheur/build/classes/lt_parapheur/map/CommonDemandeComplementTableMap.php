<?php



/**
 * This class defines the structure of the 'demande_complement' table.
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
class CommonDemandeComplementTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonDemandeComplementTableMap';

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
        $this->setName('demande_complement');
        $this->setPhpName('CommonDemandeComplement');
        $this->setClassname('CommonDemandeComplement');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('id_resultat_analyse_decison', 'IdResultatAnalyseDecison', 'INTEGER', true, null, null);
        $this->addColumn('date_envoie', 'DateEnvoie', 'TIMESTAMP', true, null, null);
        $this->addColumn('date_reception', 'DateReception', 'TIMESTAMP', true, null, null);
        $this->addColumn('email', 'Email', 'VARCHAR', false, 100, null);
        $this->addColumn('nom_entreprise', 'NomEntreprise', 'LONGVARCHAR', true, null, null);
        $this->addColumn('objet', 'Objet', 'CLOB', true, null, null);
        $this->addColumn('message', 'Message', 'CLOB', true, null, null);
        $this->addColumn('uid', 'Uid', 'VARCHAR', true, 32, null);
        $this->addColumn('message_reponse', 'MessageReponse', 'CLOB', true, null, null);
        $this->addColumn('statut', 'Statut', 'INTEGER', true, null, null);
        $this->addColumn('date_accuse_reception', 'DateAccuseReception', 'TIMESTAMP', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonDemandeComplementTableMap
