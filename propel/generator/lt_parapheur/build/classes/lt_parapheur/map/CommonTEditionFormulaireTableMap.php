<?php



/**
 * This class defines the structure of the 't_edition_formulaire' table.
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
class CommonTEditionFormulaireTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonTEditionFormulaireTableMap';

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
        $this->setName('t_edition_formulaire');
        $this->setPhpName('CommonTEditionFormulaire');
        $this->setClassname('CommonTEditionFormulaire');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_edition_formulaire', 'IdEditionFormulaire', 'INTEGER', true, null, null);
        $this->addForeignKey('id_dossier_formulaire', 'IdDossierFormulaire', 'INTEGER', 't_dossier_formulaire', 'id_dossier_formulaire', true, null, null);
        $this->addColumn('cle_externe_edition', 'CleExterneEdition', 'INTEGER', true, null, null);
        $this->addColumn('libelle', 'Libelle', 'VARCHAR', true, 255, null);
        $this->addColumn('extension', 'Extension', 'VARCHAR', true, 3, null);
        $this->addColumn('path', 'Path', 'VARCHAR', false, 255, null);
        $this->addColumn('hash', 'Hash', 'VARCHAR', false, 40, null);
        $this->addColumn('signature', 'Signature', 'LONGVARCHAR', false, null, null);
        $this->addColumn('date_generation', 'DateGeneration', 'VARCHAR', false, 255, null);
        $this->addColumn('date_depot', 'DateDepot', 'VARCHAR', false, 255, null);
        $this->addColumn('statut_generation', 'StatutGeneration', 'INTEGER', true, 1, null);
        $this->addColumn('type', 'Type', 'INTEGER', false, null, null);
        $this->addColumn('nom_fichier', 'NomFichier', 'VARCHAR', true, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonTDossierFormulaire', 'CommonTDossierFormulaire', RelationMap::MANY_TO_ONE, array('id_dossier_formulaire' => 'id_dossier_formulaire', ), null, null);
    } // buildRelations()

} // CommonTEditionFormulaireTableMap
