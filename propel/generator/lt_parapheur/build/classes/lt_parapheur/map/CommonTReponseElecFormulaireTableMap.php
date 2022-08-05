<?php



/**
 * This class defines the structure of the 't_reponse_elec_formulaire' table.
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
class CommonTReponseElecFormulaireTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonTReponseElecFormulaireTableMap';

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
        $this->setName('t_reponse_elec_formulaire');
        $this->setPhpName('CommonTReponseElecFormulaire');
        $this->setClassname('CommonTReponseElecFormulaire');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_reponse_elec_formulaire', 'IdReponseElecFormulaire', 'INTEGER', true, null, null);
        $this->addForeignKey('organisme', 'Organisme', 'VARCHAR', 'consultation', 'organisme', true, 30, null);
        $this->addForeignKey('consultation_ref', 'ConsultationRef', 'INTEGER', 'consultation', 'reference', true, null, null);
        $this->addColumn('id_entreprise', 'IdEntreprise', 'INTEGER', true, null, null);
        $this->addColumn('id_inscrit', 'IdInscrit', 'INTEGER', true, null, null);
        $this->addColumn('statut_validation_globale', 'StatutValidationGlobale', 'INTEGER', true, 1, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonConsultation', 'CommonConsultation', RelationMap::MANY_TO_ONE, array('organisme' => 'organisme', 'consultation_ref' => 'reference', ), null, null);
        $this->addRelation('CommonTDossierFormulaire', 'CommonTDossierFormulaire', RelationMap::ONE_TO_MANY, array('id_reponse_elec_formulaire' => 'id_reponse_elec_formulaire', ), null, null, 'CommonTDossierFormulaires');
    } // buildRelations()

} // CommonTReponseElecFormulaireTableMap
